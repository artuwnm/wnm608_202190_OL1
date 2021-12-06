<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

// $cart_product = array_find(getCart(),function($o){return $o->id==$_GET['id'];});

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>
		<div class="container">
		<div class="card soft">
			<h3>You added "<?= $product->title ?>" to your cart.</h3>
			<p>There are now <?= $cart_product->amount ?> of "<?= $product->title ?>"" in your cart.</p>
			<div class="display-flex">
				<div class="flex-none"><a href="../so.eunice/m13/product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="../so.eunice/m13/product_cart.php">Got to Cart</a></div>
			</div>
			
		</div>
	</div>
</body>
</html>