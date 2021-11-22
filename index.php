<?php

include_once "lib/php/functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>




			<div class="grid gap" id="products">
				<div class="col-xs-12 col-md-4">
					<figure class="figure">
						<img src="img/coco.png"  alt="">
						<figcaption>
							<div class="caption-body">
								<div><a href="product_list.php">Coco</a></div>
								<div>$15.00</div>
							</div>					
						</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-md-4">
					<figure class="figure">
						<img src="img/pivoine.png" alt="">
						<figcaption>
							<div class="caption-body">
								<div><a href="product_list.php">Pivoine</a></div>
								<div>$15.00</div>
							</div>					
						</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-md-4">
					<figure class="figure">
						<img src="img/mistral.png" alt="">
						<figcaption>
							<div class="caption-body">
								<div><a href="product_list.php">Mistral</a></div>
								<div>$15.00</div>
							</div>					
						</figcaption>
					</figure>
				</div>
			</div>
			<div>
			<button class="form-button"><a href="product_list.php">View All Products</a></button>
		</div>

	</div>

</body>
</html>