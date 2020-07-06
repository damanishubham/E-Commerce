<?php
        require 'C:\wamp\www\web dev\includes\common.php';
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
				<h1>Change Password</h1>
				<form action="settings_script.php" method="POST">
					<div class="form-group">
						<input type="password" name="password" required="true" class="form-control" placeholder="Enter Old Password">
					</div>
					<div class="form-group">
						<input type="password" name="new-password" required="true" class="form-control" placeholder="Enter New Password">
					</div>
					<div class="form-group">
						<input type="password" name="confirm-new-password" required="true" class="form-control" placeholder="Confirm Enter New Password">
					</div>
					<div class="form-group">
						<input type="submit" name="confirm" class="btn btn-primary" value="Confirm">
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