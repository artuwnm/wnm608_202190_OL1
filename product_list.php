<?php

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>


</head>

<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		
			<h2>Product List</h2>

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
				    <button data-filter="category" data-value="" type="button" class="form-button">All Scents</button>
				</div>
				<div class="flex-none">	
				    <button data-filter="category" data-value="fruit" type="button" class="form-button">Fruit</button>
				</div>	
				<div class="flex-none">	
				    <button data-filter="category" data-value="floral" type="button" class="form-button">Floral</button>
				</div>
				<div class="flex-none">	
				    <button data-filter="category" data-value="musk" type="button" class="form-button">Musk</button>
				</div>
			</div>
		

			<div class="flex-none">
			
            <div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
				    <option value="3">Price: Low to high</option>
				    <option value="4">Price: High to low</option>
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