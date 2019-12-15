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









<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hotel Website | Gallery</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
							<li><a href="index.php">Acasa</a></li>
							<li><a href="about.php">Despre</a></li>
							<li><a href="reverva.php">Rezerva</a></li>
							<li class="active"><a href="galerie.php">Galerie</a></li>
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
					<!----start-image-gallery----->
					<div class="gallerys">
					<h3>gallery</h3>
					<div class="gallery-grids">
						<div class="gallery-grid">
							<a href="images/slider1.jpg"><img src="images/slider1.jpg" alt=""></a>
							<h4>Camera 1</h4>
							<p>600 euro/noapte</p>
							<div class="gallery-button"><a href="camera.php?camera=1">Alege</a></div>
						</div>
						<div class="gallery-grid grid2">
							<a href="images/slider3.jpg"><img src="images/slider3.jpg" alt=""></a>
							<h4>Camera 2</h4>
							<p>1000 euro/noapte</p>
							<div class="gallery-button"><a href="camera.php?camera=2">Alege</a></div>
						</div>
						<div class="gallery-grid">
							<a href="images/slider1.jpg"><img src="images/slider1.jpg" alt=""></a>
							<h4>Camera 3</h4>
							<p>1200 euro/noapte</p>
							<div class="gallery-button"><a href="camera.php?camera=3">Alege</a></div>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					
					<script type="text/javascript" src="js/jquery.lightbox.js"></script>
				    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	
				    <div class="projects-bottom-paination">
						<ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
						</ul>
					</div>
				</div>
					<!----start-image-gallery----->
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

