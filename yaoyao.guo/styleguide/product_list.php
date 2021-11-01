
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PetUs Product List</title>
	<?php include "../parts/meta.php"; ?>

<body>
	<?php include "../parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>
			<article id="article3" class="article card hard">
				<h3>Food</h3>
				<div class="article-body">
					<ul class="container ">
						<li><a href="product_item.php?id=1">Product 1</a></li>
						<li><a href="product_item.php?id=2">Product 2</a></li>
						<li><a href="product_item.php?id=3">Product 3</a></li>
						<li><a href="product_item.php?id=4">Product 4</a></li>
						<li><a href="product_item.php?id=5">Product 5</a></li>
						<li><a href="product_item.php?id=6">Product 6</a></li>
					</ul>
				</div>
			</article>

			<article id="article3" class="article card hard">
				<h3>Toys</h3>
				<div class="article-body">
					<ul class="container ">
						<li><a href="product_item.php?id=7">Product 7</a></li>
						<li><a href="product_item.php?id=8">Product 8</a></li>
						<li><a href="product_item.php?id=9">Product 9</a></li>
						<li><a href="product_item.php?id=10">Product 10</a></li>
						<li><a href="product_item.php?id=11">Product 11</a></li>
						<li><a href="product_item.php?id=12">Product 12</a></li>
					</ul>
				</div>
			</article>
		</div>
	</div>


		<div class="container" >
			<h2>Best Selling</h2>
				<div class="grid gap hard">
					<div class="col-xs-12 col-md-4">
						<figure class="figure product">
							<img src="img/toy1.jpg" alt="" width=100px>
							<figcaption>
								<h4>Zebra Squeaky Toy</h4>
								<div>$4.49</div>
								<button class="round-btn"><a href="styleguide/cart.php">Add to Cart</a></button>
							</figcaption>
						</figure>
					</div>
			

				<div class="col-xs-12 col-md-4">
					<figure class="figure product">
						<img src="img/toy2.jpg" alt="">
						<figcaption>
							<h4>Cozie Moose Plush Toy</h4>
							<div>$11.49</div>
							<button class="round-btn"><a href="styleguide/cart.php">Add to Cart</a></button>
						</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-md-4">
					<figure class="figure product">
						<img src="img/toy3.jpg"  alt="">
						<figcaption>
							<h4>Squeezz Ball Toy</h4>
							<div>$4.49</div>
							<button class="round-btn"><a href="styleguide/cart.php">Add to Cart</a></button>
						</figcaption>
					</figure>
				</div>
			</div>



	</body>
	</html>