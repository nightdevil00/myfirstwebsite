<?php


session_start([
    'cookie_lifetime' => 86400,
]);





if (!isset($_SESSION['username'])) {
   echo 'Welcome, '.$_SESSION['username']; 
} else {
echo 'Sorry, You are not logged in.';
}
?>


<html>
	<head>
		<title>Hotel Website | Services</title>
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
							<p class="phone">Suna ne: <a href="#">0741336192</a></p>
							<p class="gpa">Harta <a href="#">Vezi Harta</a></p>
							
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li><a href="index.php">Acasa</a></li>
							<li><a href="about.php">Despre</a></li>
							<li class="active"><a href="reverva.php">Rezerva</a></li>
							<li><a href="galerie.php">Galerie</a></li>
							<li><a href="contact.php">Contact</a></li>
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
					<!-----start--services------>
					<div class="services">
						<div class="service-content">
							
  </div>
  
  
						</div>
						<div class="clear"> </div>
					</div>
					<!-----End--services------>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				 

<h2>Nu ai cont? Click <a href="register.php">aici !</a></h2> 

</br>

</br>

</br>

</br>


<h2>Ai cont? Click <a href="login.php">aici !</a></h2> 

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