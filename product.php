<?php
        require 'C:\wamp\www\web dev\includes\common.php';
        function check_if_in_cart($itemid)
        {
            $con = mysqli_connect("localhost","root","luv/me299@254","store")
                    or die(mysqli_error($con));
            $user_id= $_SESSION['id'];
            $query = "select * from users_item where  item_id='$itemid' AND user_id ='$user_id' and status='Added to cart' ";
            $result= mysqli_query($con,$query)
                or die(mysqli_error($con));
            if (mysqli_num_rows($result)>0) {
                return 1;
            }
            else
            {
                return 0;
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lifestyle Store | Products</title>
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
	<div class="container">
		<div class="jumbotron jumbotron_custom">
			<h1>Welcome to our Lifestyle Store</h1>
			<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
		</div>
	</div>
	<div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(1)==1) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon EOS </h3>
                            <p>Price: Rs. 40,000.00 </p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(2)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(3)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(4)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price: Rs. 13000.00 </p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(5)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(6)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00 </p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(7)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111 </h3>
                            <p>Price: Rs. 18000.00 </p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(8)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>H&W </h3>
                            <p>Price: Rs. 800.00 </p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(9)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(10)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(11)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price Rs. 1300.00</p>
                            <?php
                                if(!isset($_SESSION['email']))
                                {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                            <?php 
                                }
                                else
                                {
                                    if (check_if_in_cart(12)) 
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php    
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
	<?php
        require 'C:\wamp\www\web dev\includes\footer.php';
    ?>
</body>
</html>