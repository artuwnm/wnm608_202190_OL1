<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>



			<div class="grid gap" id="products">
				<div class="col-xs-12 col-md-4">
					<figure class="figure">
						<img src="img/hasami_1.png"  alt="">
						<figcaption>
							<div class="caption-body">
								<div><a href="product_item.php?id=1">Hasami Porcelain Set</a></div>
								<div>$250.00</div>
							</div>					
						</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-md-4">
					<figure class="figure">
						<img src="img/matter_1.png" alt="">
						<figcaption>
							<div class="caption-body">
								<div><a href="product_item.php?id=2">Matter&Home - Strength Candle</a></div>
								<div>$45</div>
							</div>					
						</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-md-4">
					<figure class="figure">
						<img src="img/mhs_1.png" alt="">
						<figcaption>
							<div class="caption-body">
								<div><a href="product_item.php?id=3">My Happy Soap - Musk</a></div>
								<div>$12.99</div>
							</div>					
						</figcaption>
					</figure>
				</div>
			</div>

	</div>



</body>
</html>