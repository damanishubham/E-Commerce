<?php
	require 'C:\wamp\www\web dev\includes\common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lifestyle Store | Login</title>
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
	<div class="container panel_class">
		<div class="row">
			<div class="xs-col-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<p class="text-warning">Login to make purchase</p>
						<form action="login_submit.php" method="POST">
							<div class="form-group">
								<input type="email" name="email" required="true" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="password" name="password" required="true" class="form-control" placeholder="password">
							</div>
							<div class="form-group">
								<input type="Submit" name="Login" class="btn btn-primary" value="Submit">
							</div>
						</form>
					</div>
					<div class="panel-footer">
						<a href="signup.php">Don't have an account? Register.</a>
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