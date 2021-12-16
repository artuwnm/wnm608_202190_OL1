<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r. "<img src='../so.eunice/m10/img/$o'>";
});


//print_p($product)

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
			<h3>You added "<?= $product->title ?>" to your cart</h3>
			<div class="display-flex">
				<div class="flex-none"><a href="../so.eunice/m10/product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="../so.eunice/m10/product_cart.php">Got to Cart</a></div>
			</div>
			
		</div>
	</div>
</body>
</html>