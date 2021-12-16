<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<!-- div.container>div.card.soft>h2>{Product List} -->
	<div class="container">
		
			<h3>Product List</h3>


			<?php 


			$result = makeQuery(
				makeConn(), 
				"
				SELECT * 
				FROM `products`
				ORDER BY `date_create` DESC
				-- LIMIT 12
				"
			);

			echo "<div class='productlist grid gap'>", array_reduce($result,'productListTemplate'), "</div>";

			?>

		
	</div>
</body>
</html>












