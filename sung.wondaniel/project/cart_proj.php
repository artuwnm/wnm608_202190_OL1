<?php

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();

//print_p($product);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<?php include "meta_proj.php"; ?>	
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>
<body>
	
	<?php include "navbar_proj.php"; ?>	

	<div class="container">
		<h2>In Your Cart</h2>
		<div class="grid gap">
		<div class="col-xs-12 col-md-7">
			<div class="card soft">
				<?= array_reduce($cart_items,'cartListTemplate')?>
			</div>
		</div>
		<div class="col-xs-12 col-md-5">
			<div class="card soft flat">	
				<?=	cartTotals() ?>
			</div>
			</div>
		</div>				
	</div>



</body>
</html>