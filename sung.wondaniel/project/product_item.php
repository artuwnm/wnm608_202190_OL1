<?php

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='../img/$o'>";
});

//print_p($product);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "meta_proj.php"; ?>	

	<script src="../js/product_thumbs.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>
<body>
	
	<?php include "navbar_proj.php"; ?>	


	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main">
					<img src="../img/<?= $product->thumbnail ?>">
					</div>
					<div class="images-thumbs">
						<?= $image_elements?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

					<input type="hidden" name="product-id" value="<?= $product->id ?>">

					<div class="card-section">
					<h2 class="product-model"><?= $product->model ?></h2>
					<div class="product-price">&dollar;<?= $product->price ?></div>
					</div>

					<div class="card-section">
						<label for="product-amount" class="form-label">Quantity</label>
					   <div class="form-select" id="product-amount">
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

		<div class="card soft dark">
			<p><?= $product-> description ?></p>
		</div>

		<h2>Recommended Products</h2>
		<?php

			recommendedSimilar($product->category,$product->id);

		?>
	</div>



</body>
</html>