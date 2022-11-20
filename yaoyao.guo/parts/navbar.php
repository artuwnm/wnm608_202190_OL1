
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&display=swap" rel="stylesheet">	

	
<?php

include_once "lib/php/functions.php";


?>

<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<a href="index.php">
					<h1 style="color:white; font-size: 2em; font-family:'Fuzzy Bubbles', cursive;">PetUs</h1>
				</a>
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