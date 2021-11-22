<?php

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		
			<h2>Product List</h2>

		
	<?php


		$result = makeQuery(
			makeConn(),
			"
			SELECT *
			FROM `products`
			ORDER BY `price` DESC
			LIMIT 12
			"
		);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

	?>

	
		</div>
	</div>

</body>
</html>