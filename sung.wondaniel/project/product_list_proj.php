<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "meta_proj.php"; ?>	
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>
<body>
	
	<?php include "navbar_proj.php"; ?>	


	<div class="container">
			<h2>Product List</h2>



				<?php

				include_once "../lib/php/functions.php";
				include_once "../parts/templates.php";

				$result = makeQuery(
					makeConn(),
					"
					SELECT *
					FROM `products`
					ORDER BY `date_create` DESC
					LIMIT 12
					"
				);

				echo "<div class='productlist grid gap'>", array_reduce($result,'productListTemplate'), "</div>";

				?>
	</div>



</body>
</html>