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


<div class="view-window" style="background-image:url(img/cover_1.JPG)">
	<div class="fill-parent display-flex flex-align-center flex-justify-center">
	</div>
	</div>

<div class="container">
	<div class="card soft">
		<h2>My Happy Soap</h2>
		<p>Find Your Daily Scent!</p>
	</div>


		<div class="container">

			<h2>Latest Added</h2>
			
			<?php recommendedCategory("musk");?>

			<h2>Gift For Her</h2>
			<?php recommendedCategory("floral");?>

		</div>



		<div>
			<button class="form-button"><a href="product_list.php">View All Products</a></button>
		</div>

	</div>
</div>

</body>
</html>