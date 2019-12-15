


<html>
	<head>
		<title>Hotel Website | Home</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
	
	
		<!---start-Wrap--->
			<!---start-header--->
			<div class="header">
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
							<a href="index.php"><img src="images/logo2.png" title="logo" /></a>
						</div>
						<div class="contact-info">
							<p class="phone">Suna-ne : <a href="#">0741336192</a></p>
							<p class="gpa">Harta : <a href="#">Vezi harta</a></p>
							
						</div>
						
						
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li class="active"><a href="index.php">Acasa</a></li>
							<li><a href="about.php">Despre</a></li>
							<li><a href="reverva.php">Rezerva</a></li>
							<li><a href="galerie.php">Galerie</a></li>
							<li><a href="contact.php">Contact</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<!---End-header--->
			<div class="clear"> </div>
			
			<div class="content">
				<h1> Fa-ti cont! </h1>

<br>

<p align="center">

<form action="register.php" method="post">
    <table width="200" border="0">
  <tr>
    <td>  Nume</td>
    <td> <input type="text" name="user" > </td>
  </tr>
  <tr>
    <td> Parola  </td>
    <td><input type="password" name="pass"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="register" value="Inregistreaza"></td>
    <td></td>
  </tr>
</table>
</form>

</p>

</br>

<p align="center">

<?php
			if ( (empty($_POST['username'])) OR (empty($_POST['password'])) )
{
	//if the values are empty - 
	
	
	}else{
		echo "<br>Verific Datele";
		//if the inputs has values
	
		//store the data into local variables
	
		$Username = $_POST['username'];
		$Password = $_POST['password'];
	
		$Check=true;
		
		//Validate password - has to be more than 5 char
		if (strlen($Username) <5 )
		{
			echo "<br> Date incorecte";
			$Check=false;
		}
	
		//if first name has any special characters
		if (is_numeric($Username))
		{
			echo "<br> Userul nu poate contine numere...";
			$Check=false;
		}
	
		
	
		//all the password validations
	
		if (strlen($Password) <5 )
		{
			echo "<br> Parola trebuie sa contina mai mult de 5 caractere ";
			$Check=false;
		}
	
		//if all the validation are true then prepare
	
		//to store to online database
		if ($Check == true)
		{
		echo "<br> Verific.....";
}
	}


if(isset($_POST["user"]) && isset($_POST["pass"]))
{
    // check if user exist.
    $file=fopen("cont.txt","r");
    $finduser = false;
    while(!feof($file))
    {
        $line = fgets($file);
        $array = explode(";",$line);
        if(trim($array[0]) == $_POST['user'])
        {
            $finduser=true;
            break;
        }
    }
    fclose($file);

    // register user or pop up message
    if( $finduser )
    {
        echo  $_POST["user"];
        echo ' <b>exista deja</b> !';
        ////include 'register.html';
    }
    else
    {
        $file = fopen("cont.txt", "a");
        fputs($file,$_POST["user"].";".$_POST["pass"]."\r\n");
        fclose($file);
        echo $_POST["user"];
        echo " <b>Inregistrat cu succes!</b>";
	echo "<a href='login.php'>Continua</a>";
    }
}
else
{
    //////include 'register.html';
}
?>

</p>

</div>


	<!---End-Wrap--->
	</body>
</html>
