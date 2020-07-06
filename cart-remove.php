<?php
	require 'C:\wamp\www\web dev\includes\common.php';
	$pid= $_GET['id'];
	$uid= $_SESSION['id'];
	$query= "delete from users_item where user_id='$uid' and item_id='$pid'";
	$result= mysqli_query($con,$query)
				or die(mysqli_error($con));
	header('location: cartpage.php');
?>