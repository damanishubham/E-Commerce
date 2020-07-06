<?php
	require 'C:\wamp\www\web dev\includes\common.php';
	if (isset($_SESSION['email'])) 
		{   
			header('location: product.php'); 
		} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lifestyle Store</title>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, inital-scale=1.0">
	<meta name="author" content="Shubham Damani">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		require 'C:\wamp\www\web dev\includes\header.php';
	?>
	<div class="banner">
		<div class="inner_banner">
			<div class="banner_content">
				<h2>We sell Lifestyle</h2>
				<p>Flat 40% OFF on premium brands</p>
				<div class="custom_button btn">SHOP NOW</div>
			</div>
		</div>
	</div>
	<div class="thumbnail_links">
		<div class="container">
			<div class="col-sm-4">
				<div class="thumbnail">
					<a href="login.php"><img src="img/camera.jpg"></a>
					<div class="caption">
						<h3>CAMERA</h3>
						<p>Choose among the best available in world</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<a href="login.php"><img src="img/watch.jpg"></a>
					<div class="caption">
						<h3>WATCHES</h3>
						<p>Original watches from best brands</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<a href="login.php"><img src="img/shirt.jpg"></a>
					<div class="caption">
						<h3>SHIRT</h3>
						<p>Our exquisite collection of shirts</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		require 'C:\wamp\www\web dev\includes\footer.php';
	?>
</body>
</html>