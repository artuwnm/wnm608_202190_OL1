	
	
<?php

include_once "lib/php/functions.php";

?>

<header class="navbar">
		<div class="container display-flex">
			<div class="flext-none">
				<a href="index.php"><img src="img/logo.png" alt="" class="logo"></a>
			</div>	
			<div class="flex-stretch"></div>
			<nav class="navbar nav nav-flex flex-none">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="product_list.php">STORE</a></li>
					<li><a href="product_cart.php">
					<span>CART</span>
					<span class="badge"><?=makeCartBadge();?></span>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>