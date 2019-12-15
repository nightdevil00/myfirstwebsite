<?php 
session_start();     
if (!isset($_SESSION['user'])) {
   echo 'Salut, '.$_SESSION['user']; 
} else {
echo 'Sorry, You are not logged in.';
}

?>


<html>
	<head>
		<title>Hotel Website | Gallery </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
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
							<p class="phone">Suna ne  : <a href="#">0741336192</a></p>
							<p class="gpa">Harta : <a href="#">Vezi Harta</a></p>
							
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li><a href="index.php">Acasa</a></li>
							<li><a href="about.php">Despre</a></li>
							<li><a href="reverva.php">Rezerva</a></li>
							<li><a href="galerie.php">Galerie</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<!---End-header--->
			<div class="clear"> </div>
			<!---start-content----->
			<div class="content">
				<div class="wrap">
					<!-------start-contatct------>
					<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	
      				</div>
      			<div class="company_address">
				     	<h3>Unde suntem :</h3>
						    	<p>Bucuresti,</p>
						   		<p>Iuliu Maniu,</p>
						   		<p>Piata Gorjului</p>
				   		<p>Telefon : 0741336192</p>
				   		<p>Fax: (000) 00000000</p>
				 	 	<p>Email: <span>hotel@hotel.ro</span></p>
				   		<p>Ne gasesti si pe: <span>Facebook</span>, <span>Twitter</span></p>
						
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contacteaza-ne </h3>
					   <form action="contact.php" method="POST">
<p>Nume</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Telefon</p> <input type="text" name="phone">
<p>De unde ai auzit de site?</p>
<select name="dropdown" size="1">
<option value="Option1">Google</option>
<option value="Option2">Facebook</option>
<option value="Option3">Booking</option>
<option value="Option4">Prieteni</option>
</select>
<br />
<p>Mesaj</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Trimite"> <input type="reset" value="Curata">
</form>

				    </div>
  				</div>				
			  </div>
			</div>
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$dropdown = $POST['dropdown'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "localhost@localhost";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Va multumim pentru mesaj! Veti fi contactat in cel mai scurt timp de un reprezentant de vanzari";
?>

					<!-------start-contatct------>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
				<div class="box">
				
				</div>
				
				<div class="box">
					 
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-box---->
		</div>
		<!---start-copy-Right----->
		<div class="copy-tight">
				</div>
		<!---End-copy-Right----->
			</div>
			<!---End-content----->
		</div>
		<!---End-Wrap--->
	</body>
</html>

