<?php


session_start();





if (!isset($_SESSION['username'])) {

   echo 'Welcome, '.$_SESSION['username']; 
} else {
echo 'Sorry, You are not logged in.';
}

?>
<?php

   echo '<a href="logout.php">Logout</a>';

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
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
						    <ul class="rslides" id="slider1">
						      <li><img src="images/slider3.jpg" alt=""></li>
						      <li><img src="images/slider1.jpg" alt=""></li>
						      <li><img src="images/slider3.jpg" alt=""></li>
						    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
			<!---start-content----->
			<div class="content">
				<div class="quit">
					<p><span class="start">Ca </span> la mama <span class="end">acasa</span></p>
				</div>
					<div class="content-grids">
						<div class="wrap">
						<div class="content-grid">
							<div class="content-grid-pic">
								<a href="#"><img src="images/icon1.png" title="image-name" /></a>
							</div>
							<div class="content-grid-info">
								<h3>Cea mai buna Bucatarie</h3>
								<p>"Mancare buna"</p>
								<a href="#"Mi-e foame</a>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="content-grid">
							<div class="content-grid-pic">
								<a href="#"><img src="images/icon2.png" title="image-name" /></a>
							</div>
							<div class="content-grid-info">
								<h3>24h Suport</h3>
								<p>"Suna-ne cand vrei"</p>
								<a href="#">Citeste mai multe</a>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="content-grid">
							<div class="content-grid-pic">
								<a href="#"><img src="images/iocn3.png" title="image-name" /></a>
							</div>
							<div class="content-grid-info">
								<h3>Cele mai bune camere</h3>
								<p>"Confort si eleganta"</p>
								<a href="#">Citeste mai multe</a>
							</div>
							<div class="clear"> </div>
						</div>
						
						<div class="clear"> </div>
					</div>
				</div>
				<div class="clear"> </div>
				<div class="content-box">
					<div class="wrap">
					<div class="content-box-left">
						<div class="content-box-left-topgrid">
							<h3>Bine ai venit </h3>
							<p> Sime-te ca acasa</p>
							<p> Hotel</p>
							<span>Pentru mai multe informatii : 0741336192</span>
						</div>
						<div class="content-box-left-bootomgrids">
							<div class="content-box-left-bootomgrid">
								<h3>Deluxe Rooms</h3>
								<p> Alege camera asta</p>
								<a href="reverva.php?camera=3"><img src="images/slider1.jpg" title="cam3" /></a>
							</div>
							<div class="content-box-left-bootomgrid">
								<h3>Lux si confort</h3>
								<p>Deja esti rasfatat!</p>
								<a href="reverva.php"><img src="images/slider2.jpg" title="rezerva" /></a>
							</div>
							<div class="content-box-left-bootomgrid lastgrid">
								<h3>O camera pe gustul tau</h3>
								<p>Sa visezi frumos</p>
								<a href="reverva.php?camera=2"><img src="images/slider3.jpg" title="cam2" /></a>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="content-box-right">
						<div class="content-box-right-topgrid">
							<h3>Oferte</h3>
							<a href="#"><img src="images/slider1.jpg" title="imnage-name" /></a>
							<h4>Oferta Zilei</h4>
							<p>"Doar azi ai:</p>
							<a href="reverva.php?camera=1">Citeste mai multe:</a>
						</div>
						<div class="content-box-right-bottomgrid">
							
						</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
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

