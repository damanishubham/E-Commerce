<?php
    require 'C:\wamp\www\web dev\includes\common.php';
    if (!isset($_SESSION['email'])) 
	{   
			header('location: login.php'); 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lifestyle Store | Cart</title>
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
        $userid= $_SESSION['id'];
		$query = "select * from users_item inner join items on users_item.item_id = items.pid";
		$result= mysqli_query($con,$query)
				or die(mysqli_error($con));
		if (mysqli_num_rows($result)==0) 
		{
    ?>

    <div class="container cartcustom">
    	<table class="table table-striped">
    		<th>
    			<h1 style="font-family: Roboto, Tahoma;">NO ITEMS IN CART</h1>
    		</th>
    	</table>
    	
    </div>
    <?php
    	}
    	else
    	{
    		$item_id_array = array();
    		$sum=0;
    		while ($row= mysqli_fetch_array($result))
    		{
    			$sum=$sum+$row['price'];
    			$item_id=$row['item_id'];
    			array_push($item_id_array,$item_id);
    ?>

	<div class="container cartcustom">
		<table class="table table-striped">
			<tr>
				<th>Item Id</th>
				<th>Item Name</th>
				<th>Price</th>
				<th></th>
			</tr>
			<tr>
				<td>
					<?php echo $row['item_id'];  ?>
				</td>
				<td>
					<?php echo $row['pname'];  ?>
				</td>
				<td>
					<?php echo $row['price'];  ?>
				</td>
				<td>
					<a href="cart-remove.php?id=<?php echo $item_id; ?>" class="remove_item_link"> Remove</a> 
				</td>
			</tr>
			<?php
				}
			?>
			<?php 
				$Text = json_encode($item_id_array);
				$RequestText = urlencode($Text);
			?>
			<tr>
				<td>
					<br>
				</td>
				<td>Total</td>
				<td><?php echo $sum;  ?></td>
				<td>
					<div><a href="success.php?cluster=<?php echo $RequestText; ?>" class="btn btn-primary">Confirm Order</a></div>
				</td>
			</tr>
		</table>
	</div>
	<?php
		}
	?>
	<?php
        require 'C:\wamp\www\web dev\includes\footer.php';
    ?>
</body>
</html>