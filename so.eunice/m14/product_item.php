<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r. "<img src='../so.eunice/m14/img/$o'>";
});


//print_p($product)

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

	<script src="../so.eunice/m14/js/product-thumbs.js"></script>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container">
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<div class="card soft">
						<div class="images-main"><img src="img/<?=$product->thumbnail ?>"></div>
						<div class="images-thumbs">
							<img src="img/<?=$product->thumbnail ?>">
							<?= $image_elements ?>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-6">
					<form class="card soft flat" method="post" action="m14/cart_actions.php?action=add-to-cart">

						<input type="hidden" name="product-id" value="<?= $product->id ?>">

						<div class="card-section">
							<h2><?= $product->title ?></h2>
							<p><strong>Author: <?= $product->author ?></strong></p>
							<p class="product-category"><strong><?= $product->category ?></strong></p>
							<p><?= $product->description ?></p>
							<div class="product-price">&dollar;<?= $product->price ?></div>
						</div>
						<div class="card-section">
							<label for="product-amount" class="form-label">Amount</label>
							<div class="form-select" >
								<select id="product-amount" name="product-amount">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
						</div>

						<div class="card-section">
							<input type="submit" class="form-button" value="Add To Cart">
						</div>
					</form>
				</div>
			</div>
			<h4>Recommended Books</h4>
			<?php
				recommendedSimilar($product->category,$product->id);
			?>

	</div>
</body>
</html>












