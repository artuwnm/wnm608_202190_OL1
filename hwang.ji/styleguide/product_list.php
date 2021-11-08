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
		<div class="card soft">
			<h2>Product List</h2>
			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
			<ul>
				<li><a href="product_item.php?id=1">Raspberry Chocolate</a></li>
				<li><a href="product_item.php?id=2">Banana Chocolate</a></li>
				<li><a href="product_item.php?id=3">Nuts Chocolate</a></li>
				<li><a href="product_item.php?id=4">Puffy Vinilla</a></li>
				<li><a href="product_item.php?id=5">Strawberry Frosted</a></li>
				<li><a href="product_item.php?id=6">Chocolate Cake</a></li>
				<li><a href="product_item.php?id=7">Plain Glazed </a></li>
				<li><a href="product_item.php?id=8">Caramel Drizzled</a></li>
				<li><a href="product_item.php?id=9">New York Cheese cake</a></li>
				<li><a href="product_item.php?id=10">Peanut butter Jelly</a></li>
				<li><a href="product_item.php?id=11">Salted Caramel </a></li>
				<li><a href="product_item.php?id=12">Lemon Buttermilk <a></li>
			</ul>

			<?php 

			include "../lib/php/functions.php";
			$result= makeQuery(makeConn(),"SELECT * FROM `products`");

			print_p($result);

			?>



		</div>
	</div>

</body>
</html>