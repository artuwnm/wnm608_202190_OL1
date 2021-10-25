
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PetUs Peoduct List</title>

	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../css/storetheme.css">
	<link rel="stylesheet" type="text/css" href="../lib/css/gridsystem.css">
</head>



<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flext-none">
				<h1 style="color:#fff;">PetUs</h1>
			</div>	
			<div class="flex-stretch"></div>
			<nav class="navbar nav nav-flex flex-none">
				<ul>
					<!-- li*3>a[href=#]>{Link $} -->
					<li><a href="index.html">Home</a></li>
					<li><a href="product_list.php">Shop</a></li>
					<li><a href="cart.php">Cart</a></li>
				</ul>
			</nav>
		</div>
	</header>
	


	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

				<article id="article3" class="article card hard">
				<h2>Food</h2>
				<div class="article-body">
					<ul class="container ">
						<li ><a href="#article1">Wet Food</a></li>
						<li ><a href="#article2">Dry Food</a></li>
						<li ><a href="#article3">Premium Food</a></li>
						<li ><a href="#article4">Veterinary Diets</a></li>
						<li ><a href="#article4">Food Toppings</a></li>
					</ul>
				</div>
				</article>
				
				<article id="article4" class="article card hard">
				<h2>Treat</h2>
				<div class="article-body">
					<ul class="container ">
						<li ><a href="#article1">Biscuits, Cookies & Crunchy Treats</a></li>
						<li ><a href="#article2">Soft & Chewy Treats</a></li>
						<li ><a href="#article3">Dental Treats</a></li>
						<li ><a href="#article4">Jerky Treats</a></li>
						<li ><a href="#article4">Bones, Bully Sticks & Natural Chews</a></li>
					</ul>
					
				</div>
				</article>
			
				<article id="article5" class="article card hard">
				<h2>Supplies</h2>
				<div class="article-body">
					<ul class="container ">
						<li ><a href="#article1">Toys</a></li>
						<li ><a href="#article2">Healthcare</a></li>
						<li ><a href="#article3">Vitamins & Supplements</a></li>
						<li ><a href="#article4">Cleaning & Potty</a></li>
						<li ><a href="#article4">Crates, Pens & Gates</a></li>
						<li ><a href="#article4">Beds</a></li>
						<li ><a href="#article4">Leashes, Collars & Harnesses</a></li>
						<li ><a href="#article4">Bowls & Feeders</a></li>
						<li ><a href="#article4">Grooming</a></li>
						<li ><a href="#article4">Clothing & Accessories</a></li>
					</ul>
				</div>
			</article>
		</div>
	


		<div class="container" id="product-list">
		<h2>Product List</h2>
		<div class="grid gap hard">

			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="../img/toy1.jpg" alt="">
					<figcaption>
						<h4>Zebra Squeaky Toy</h4>
						<div>$4.49</div>
						<button class="round-btn"><a href="#">Add to Cart</a></button>
					</figcaption>
				</figure>
			</div>

			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="../img/toy2.jpg" alt="">
					<figcaption>
						<h4>Cozie Moose Plush Toy</h4>
						<div>$11.49</div>
						<button class="round-btn"><a href="#">Add to Cart</a></button>
					</figcaption>
				</figure>
			</div>

			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="../img/toy3.jpg"  alt="">
					<figcaption>
						<h4>Squeezz Ball Toy</h4>
						<div>$4.49</div>
						<button class="round-btn"><a href="#">Add to Cart</a></button>
					</figcaption>
				</figure>
			</div>
		</div>



	</body>
	</html>