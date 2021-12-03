
<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	
	<?php include "parts/meta.php" ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

	<script>
	query({type:'products_all'}).then(d=>{
		$(".productlist").html(listItemTemplate(d.result))
	});
</script>


</head>

<body>

	<?php include "parts/navbar.php" ?>



	<div class="container">
	
			<h2>Product List</h2>


			<div class="form-control">
				<div class="card soft">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products" >
				</form>
			
					<div class="display-flex" style="padding-top: 10px;">
						<div class="flex-stretch display-flex">
							<div class="flex-none sort">
								<button data-filter="category" data-value="" type="button" class="form-button">All</button>
							</div>
							<div class="flex-none sort">
								<button data-filter="category" data-value="toys" type="button" class="form-button ">Toys</button>
							</div>
							<div class="flex-none sort">
								<button data-filter="category" data-value="treats" type="button" class="form-button">Treats</button>
							</div>
							<div class="flex-none sort">
								<button data-filter="category" data-value="food" type="button" class="form-button">Food</button>
							</div>
							<div class="flex-none sort">
								<button data-filter="category" data-value="others" type="button" class="form-button">Others</button>
							</div>
						</div>
				
						<div class="flex-none">
							<div class="form-select">
								<select class="js-sort">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Least Expensive</option>
									<option value="4">Most Expensive</option>
								</select>
							</div>
						</div>	
					</div>
				</div>
			</div>



			<div class='productlist grid gap'></div>



			<?php

			$result= makeQuery(
			makeConn(),
			"
			SELECT * 
			FROM `products`
			ORDER BY `date_create` DESC
			LIMIT 15
			"
		);
	

		echo "<div class='productlist grid gap'>", array_reduce($result, 'productListTemplate'),"</div>";

		?>
			
		

	
</div>

</body>
</html>