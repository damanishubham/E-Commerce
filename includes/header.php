<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Lifestyle Store</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="nav navbar-nav navbar-right">
					<?php
						if (isset($_SESSION['email'])){
					?>
					<li><a href="cartpage.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
					<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
					<li><a href="logout.php" "><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
					<?php } 
						else{
					?>
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
