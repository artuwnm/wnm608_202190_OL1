<?php

include_once "../lib/php/functions.php"

?>
	<input type="checkbox" id="menu" class="hidden">
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none"></div>
				<h1>Kickin Hard</h1>
			<div class="flex-stretch"></div>
			<div class="flex-none menu-button" >
				<label for="menu">&equiv;</label>
			</div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="index.php" href-#="">Home</a></li>
					<li><a href="product_list_proj.php" href-#="">Store</a></li>
					<li><a href="cart_proj.php" href-#="">
					       <span>Cart</span>
					       <span class="badge"><?= makeCartBadge(); ?></span>
				    </a></li>
				</ul>
			</nav>
		</div>	
	</header>