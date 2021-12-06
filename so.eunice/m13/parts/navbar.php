<?php 

include_once "lib/php/functions.php";

?>

	
	<base href="http://euniceso.net/aau/wnm608/so.eunice/m13">
	
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<!-- <h1>Store</h1> -->
<!-- 				<a href="m10/index.php">
					<img src="img/bookworld_logo.png" style="height: 40px; margin-top: 0.5em;">
				</a> -->
				<div><a href="m13/index.php" >
					<img src="img/bookworld_logo.png" class="navlogo">
				</a></div>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<!-- li*3>a[href=#]>{Link $} -->
					<li><a href="m13/index.php">Home</a></li>
					<li><a href="m13/product_list.php">Store</a></li>
					<li><a href="m13/about.php">About</a></li>
					<li><a href="m13/product_cart.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span>
					</a></li>
				</ul>
				
			</nav>
		</div>
	</header>