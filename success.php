<?php
        require 'C:\wamp\www\web dev\includes\common.php';
        if (isset($_SESSION['email'])) 
		{   
			$uid= $_SESSION['id'];
			$Text = urldecode($_REQUEST['cluster']);
			$item_id_array = json_decode($Text);
			foreach ($item_id_array as $pid) {
				$query = "UPDATE users_item SET status='Confirmned' where user_id='$uid' and item_id='$pid'";
				$result= mysqli_query($con,$query)
							or die(mysqli_error($con));
			}
		}
?>
<!DOCTYPE html>
<html lang="en">
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
				<h1>Your order is confiremed!!</h1>
				<p><a href="product.php" class="text-warning">CLick Here</a> to place another order</p>
			</div>
		</div>
	</div>
	<?php
        require 'C:\wamp\www\web dev\includes\footer.php';
    ?>
</body>
</html>