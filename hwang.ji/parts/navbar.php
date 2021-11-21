
<?php

// include_once "../lib/php/functions.php";
//M11 #5-1
?>

<header class="navbar">
		<div class="container display-flex">
			<div class="flext-none">
				<a href="../../../index.php"><img src="img/logo_white.png" alt="" class="logo"></a>
			</div>	
			<div class="flex-stretch"></div>
			<nav class="navbar nav nav-flex flex-none">
				<ul>
					<li><a href="../../../index.php">HOME</a></li>
					<li><a href="styleguide/product_list.php">STORE</a></li>
					<li><a href="styleguide/about.php">ABOUT</a></li>
					<li><a href="styleguide/product_cart.php">
					<span>CART</span>
					<span class="badge"><?=makeCartBadge();?></span>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>





<!-- 	<header class="navbar">
		<div class="container display-flex">
			<div class="flext-none">
				<h1>HAPPY DONUTS</h1>
			</div>	
			<div class="flex-stretch"></div>
			<nav class="navbar nav nav-flex flex-none">
				<ul>
					경로지정 확인!!
					li*3>a[href=#]>{Link $}
					<li><a href="../styleguide/index.php">HOME</a></li>
					<li><a href="../styleguide/product_list.php">STORE</a></li>
					<li><a href="../styleguide/cart.php">CART</a></li>
				</ul>
			</nav>
		</div>
	</header> -->