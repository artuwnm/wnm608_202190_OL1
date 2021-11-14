<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HAPPYDONUTS</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	

	<?php include "../parts/navbar.php"; ?>


	<div class="container">
		<!-- <div class="card soft"> -->
			<h2>Product List</h2>
			<!-- ul>li*4>a[href="product_item.php"]>{Product $}
			<li><a href="styleguide/product_item.php?id=1">Raspberry Chocolate</a></li>
		    <li><a href="styleguide/product_item.php?id=2">Banana Chocolate</a></li>-->

			<?php 

			include_once "../lib/php/functions.php";
			include_once "../parts/templates.php";
			
			$result= makeQuery(
				makeConn(),
				"
				SELECT * 
				FROM `products`
				ORDER BY `date_create` DESC
				LIMIT 12
				"
			);

			echo "<div class='productlist grid gap'>", array_reduce($result, 'productListTemplate'),"</div>";

			?>



		<!-- </div> -->
	</div>

</body>
</html>