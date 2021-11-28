

<?php 

include_once "lib/php/functions.php";

$product =  makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);


//개별 추가
include_once "parts/templates.php";
$cart_itmes = getCartItems();

//$cart_product =  array_find(getCart(),function($o){return $o->id==$_GET['id'];});

//print_p([$_GET,$_POST,$_SESSION]);



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	

	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft" style="text-align:center;">
		  <h2>You added " <?=$product->name?> " to your cart.</h2>
		    <p>There are now <?=$cart_product->amount?> of <strong><?=$product->name?> </strong> <?=$cart_product->types?> Donut in your cart. </p>
		   <!-- products form cart 개별추가-->
			<img src="<?= $product->thumbnail ?>" alt="" style="width: 25%;">
			<!-- //products form cart -->

			<div style="width: 30%; margin: 0 auto; ">
				
					<div class="round-btn" style="margin-top: 0.5em;"><a href="product_list.php">Continue Shopping</a></div>			  	
			  		<div class="round-btn" style="margin-top: 0.5em;"><a href="product_cart.php">Go To Cart</a></div>
			</div>


			<!-- <div class="display-flex">
			  	<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
			  	<div class="flex-stretch"></div>
			  	<div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
		  </div> -->
		</div>
	</div>

</body>
</html>