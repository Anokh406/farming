<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header" style="background-color:yellowgreen;">
				<h1><a href="index.php">Greenara</a></h1>
				<div class="logo1">
				<img src="images/logo.jpeg" height="70px">
            
				</div>
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"> G-Cart</a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="market.php"><span class="glyphicon glyphicon-grain"> G-Market</a></li>
						<li><a href="blogView.php"><span class="glyphicon glyphicon-comment"> FARM-BLOG</a></li>
					</ul>
				</nav>
			</header>

	</body>
</html>
