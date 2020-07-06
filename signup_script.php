<?php 
	require 'C:\wamp\www\web dev\includes\common.php';

	$name= mysqli_real_escape_string($con,$_POST['name']);
	$email= mysqli_real_escape_string($con,$_POST['email']);
	$password= mysqli_real_escape_string($con,$_POST['password']);
	$contact= mysqli_real_escape_string($con,$_POST['contact']);
	$city= mysqli_real_escape_string($con,$_POST['city']);
	$address= mysqli_real_escape_string($con,$_POST['address']);

	$password= md5($password);

	$query = "select id from users where email ='$email'";
	$result= mysqli_query($con,$query)
				or die(mysqli_error($con));

	if (mysqli_num_rows($result)>0) {
s7		echo "Enter valid id password";
		header('location: signup.php');
	}
	else
	{
		$query = "insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','address')";
		$result= mysqli_query($con,$query)
				or die(mysqli_error($con));
		$_SESSION['email'] = $email;
		$query = "select id, email, name from users where email ='$email' and password = '$password'";
		$result= mysqli_query($con,$query)
				or die(mysqli_error($con));
		$row= mysqli_fetch_array($result)
					or die(mysqli_error($con));
		$_SESSION['id'] = $row['id'];
		header('location: product.php');
	}

?>