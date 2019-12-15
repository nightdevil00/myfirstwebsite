<?php

session_start([
    'cookie_lifetime' => 86400,
]);

?>


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
<?php
			if ( (empty($_POST['username'])) OR (empty($_POST['password'])) )
{
	//if the values are empty - 
	
	echo "Toate campurile sunt necesare";

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
	
		//if username is email format
	
		// Variable to check

		
	
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

?>



			<div class="content">

<form action="login.php" method="POST">
      <div class="form-group">
        <label for="username">Nume:</label>
        <input type="text" class="form-control" id="username" name="username" value="" required="required">
      </div>
      <div class="form-group">
        <label for="password">Parola:</label>
        <input type="password" class="form-control" id="password" name="password" required="required">
      </div>
      <button type="submit" name="submit" class="btn btn-default">Intra in cont</button>
    </form>

<h2>Nu ai cont? Click <a href="register.php">aici !</a></h2> 

<?php

 if( isset($_POST['submit']) ) {

    // 
    $loginData = file('cont.txt');
    @$accessData = array("Nume: ".$_POST['username']." -> Parola : ".$_POST['password']);
    foreach ($loginData as $line) {
        @list($username, $password) = explode(',', $line);
        $accessData[trim($username)] = trim($password);
    }

    // Parseaza datele introduse
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Verifica ce a fost introdus versus baza 
    if (array_key_exists($username, $accessData) && $password == $accessData[$username]) {
        echo "Datele sunt corecte </br>";
  echo '<a href="index.php">Continua</a>';
	echo '<BR/>'  ;

		

    } else {
        echo "Numele sau parola sunt invalide. Te rugam sa incerci din nou";
		
    }
}

?>

</div>


	<!---End-Wrap--->
	</body>
</html>
