<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="m14/lib/js/functions.js"></script>
	<script src="m14/js/templates.js"></script>
	<script src="m14/js/product_list.js"></script>


</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		
			<h3>Product List</h3>

			<div class="form-control">
				<form class="hotdog light" id="product-search" action="">
					<input type="search" placeholder="Search Books">
				</form>
			</div>
			<div class="form-control">
				<div class="card soft">
					<div class="display-flex">
						<div class="flex-stretch display-flex">
							<div class="flex-none margin_right">
								<button data-filter="category" data-value="" type="button" class="form-button secondary">All</button>
							</div>
							<div class="flex-none margin_right">
								<button data-filter="category" data-value="Design" type="button" class="form-button secondary">Design</button>
							</div>
							<div class="flex-none margin_right">
								<button data-filter="category" data-value="Children Classic" type="button" class="form-button secondary">Children</button>
							</div>
							<div class="flex-none margin_right">
								<button data-filter="category" data-value="Fiction" type="button" class="form-button secondary">Fiction</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Scandinavian Noir" type="button" class="form-button secondary">Scandinavian Noir</button>
							</div>
						</div>
					
						<div class=" display-flex"></div>
						<div class="display-none">
							<div class="form-select" >
								<select class="js-sort">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Title A-Z</option>
									<option value="4">Title Z-A</option>
									
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












