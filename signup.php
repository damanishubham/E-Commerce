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
	<title>Lifestyle Store | Sign up</title>
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
	<div class="container signup_form">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<h1>SIGN UP</h1>
				<form action="signup_script.php" method="Post">
					<div class="form-group">
						<input type="text" name="name" required="true" class="form-control" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="email" name="email" required="true" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" name="password" required="true" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="text" name="contact" required="true" class="form-control" placeholder="Contact">
					</div>
					<div class="form-group">
						<input type="text" name="city" required="true" class="form-control" placeholder="city">
					</div>
					<div class="form-group">
						<input type="text" name="address" required="true" class="form-control" placeholder="Address">
					</div>
					<div class="form-group">
						<input type="Submit" name="Sign Up" class="btn btn-primary" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
        require 'C:\wamp\www\web dev\includes\footer.php';
    ?>
</body>
</html>