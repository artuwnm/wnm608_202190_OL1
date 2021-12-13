<?php

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "meta_proj.php"; ?>	
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Racing+Sans+One&display=swap" rel="stylesheet">


	<script src="../lib/js/functions.js"></script>
	<script src="../js/templates.js"></script>
	<script src="../js/product_list.js"></script>

</head>
<body>
		
	<?php include "navbar_proj.php"; ?>
	
	<div class="container">
			<h2>Products</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>
			<div class="form-control">
		     <div class="card soft">
			  <div class="display-flex flex-wrap">
			  	<div class="flex-stretch display-flex">
				<div class="flex-none">
					<button data-filter="category" data-value="" type="button" class="form-button">All</button>
				</div>

				<div class="flex-none">
					<button data-filter="category" data-value="running" type="button" class="form-button">Running</button>
				</div>

				<div class="flex-none">
					<button data-filter="category" data-value="daily" type="button" class="form-button">Daily</button>
				</div>
			</div>
			<div class="flex-none">
				<div class="form-select">
						<select class="js-sort">
							<option value="1">Newest</option>
							<option value="2">Oldest</option>
							<option value="3">Price Low</option>
							<option value="4">Price High</option>
						</select>
					   </div>
					   </div>
					 </div>
					</div>
					</div>
	


			<div class='productlist grid gap'></div>

	</div>

</body>
</html>