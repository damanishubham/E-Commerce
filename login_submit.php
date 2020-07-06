<?php 
	require 'C:\wamp\www\web dev\includes\common.php';

	$email= mysqli_real_escape_string($con,$_POST['email']);
	$password= mysqli_real_escape_string($con,$_POST['password']);

	$password= md5($password);

	$query = "select id, email, name from users where email ='$email' and password = '$password'";
	$result= mysqli_query($con,$query)
				or die(mysqli_error($con));

	if (mysqli_num_rows($result)==0) {
		header('location: login.php');
		echo "Enter valid id password";
	}
	else
	{
		$row= mysqli_fetch_array($result)
					or die(mysqli_error($con));
		header('location: product.php');
		$_SESSION['email'] = $row['email'];
		$_SESSION['id'] = $row['id'];	
	}

?>