<?php 
	require 'C:\wamp\www\web dev\includes\common.php';
	$password= mysqli_real_escape_string($con,$_POST['new-password']);
	$confirm_password= mysqli_real_escape_string($con,$_POST['confirm-new-password']);
	$uid= $_SESSION['id'];
	$oldpassword=  md5(mysqli_real_escape_string($con,$_POST['password']));
	if ($password==$confirm_password)
	{
		$password = md5($password);
		$query = "UPDATE users SET password= '$password' where id='$uid' and password='$oldpassword'";
		$result= mysqli_query($con,$query)
					or die(mysqli_error($con));
		header('location: passwordchangesuccess.php');
	}
	else
	{
?>

<head>
	<title>Lifestyle Store | Success</title>
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
	<div class="container successcustom">
		<div class="panel panel-default">
			<div class="panel-body">
				<h1>Retype the Password correctly</h1>
				<p><a href="settings.php" class="text-warning">GO BACK</a></p>
			</div>
		</div>
	</div>
	<?php
        require 'C:\wamp\www\web dev\includes\footer.php';
    ?>
</body>
</html>
<?php
	}
?>