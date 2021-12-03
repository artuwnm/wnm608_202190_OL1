

<?php 

include_once "lib/php/functions.php";

$product =  makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

include_once "parts/templates.php";
$cart_itmes = getCartItems();

//$cart_product =  array_find(getCart(),function($o){return $o->id==$_GET['id'];});

//print_p([$_GET,$_POST,$_SESSION]);//$cart_product =  array_find(getCart(),function($o){return $o->id==$_GET['id'];});

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
		<div class="card soft">
		  	<h2>You added ' <?=$product->name?> ' to your cart.</h2>
		  	<p>There are now <?=$cart_product->amount?> of <strong><?=$product->name?> </strong> <?=$cart_product->type?> in your cart. </p>
		  		<img src="<?= $product->thumbnail ?>" alt="" style="width: 25%;">

		  <div class="display-flex">
		  	<div class="round-btn" style="margin-top: 0.5em;"><a href="styleguide/product_list.php">Continue Shopping</a></div>
		  	<div class="flex-stretch"></div>
		  	<div class="round-btn" style="margin-top: 0.5em;"><a href="styleguide/product_cart.php">Go To Cart</a></div>


		  </div>
		</div>
	</div>

</body>
</html>
