<?php 
	require 'C:\wamp\www\web dev\includes\common.php';

	$item_id= mysqli_real_escape_string($con,$_GET['id']);
	$user_id= $_SESSION['id'];


	$query = "INSERT INTO users_item(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart') ";
	$result= mysqli_query($con,$query)
				or die(mysqli_error($con));
	header('location: product.php')

?>