<?php

include_once "../lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation Page</title>

	<?php include "meta_proj.php"; ?>	
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>
<body>
	
	<?php include "navbar_proj.php"; ?>	


	<div class="container">
		<div class="card soft">
			<h2>You added <?= $product->model ?> to your cart.</h2>	
			<p>You have <?= $cart_product->amount ?> of <?= $product->model ?> in your cart.</p>


		<div class="display-flex">
			<div class="flex-none"><a href="product_list_proj.php">Continue Shopping</a></div>
			<div class="flex-stretch"></div>
			<div class="flex-none"><a href="cart_proj.php">Go To Cart</a></div>
		</div>
			
	
		</div>
	</div>

</body>
</html>