<?

include_once "lib/php/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PetUs</title>

	<?php include "parts/meta.php"; ?>

</head>

<body class="flush">
	<?php include "parts/navbar.php"; ?>


	<div class="view-window" style="background-image: url('img/pets.jpg')">
		<h2><i>Dear Pet Parents~</i></h2>
	</div>

	<div class="container">
		<article id="article1" class="article card hard">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h1 style = text-align:center;>Welcome to PetUs</h1>
					<div class="article-body">
						<p>We have everything you need for your pet at amazing prices, every day. Explore more than 2,000 favorite brands, including Blue Buffalo, Nutro, Natural Balance, and Tidy Cats – all from the comfort of home.</p>
						<p>Our experts are here 24/7 to answer questions and help you find the perfect items for your pet. We also have a 100% Unconditional Satisfaction Guaranteed Policy on every order, just in case they’re not crazy about that new food or toy. Shopping for your pet has never been easier.</p>
					</div>
				</div>
			</div>
		</article>

		<article id="article2" class="article card dark">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>Hi, how can we help you?</h2>
				</div>
				<div class="flex-none">
					<small><i>Please Call 800-1234-5678 for Emergency Help</i></small>
				</div>
			</div>
			<div class="article-body">
				<p>Learn about take care your pets with the COVID-19 peitients, request a test from the comfort of your own home, or get the latest up-to-date Coronavirus information and resources.</p>
				
			</div>
		</article>

		<div class="container">
			<div class="card soft" style = text-align:center;>
			
				<button class="round-btn"><a href="../yaoyao.guo/product_list.php">SHOP NOW</a></button>
			</div>
		</div>
	</div>
	


	<div class="view-window" style="background-image: url('img/snack.jpg')">  
	</div>
		
		<div class="container">
			<div class="card soft" style = text-align:center;>
				<div class="subscribe">
					<h2>Join PetUs to Get More Information</h2>
					<p>By signing in, you agree to our website Terms & Conditions and Privacy Statement.</p>
					<input type="text" placeholder="yours@example.com">
					<button class="btn_style">SUBSCRIBE</button>
				</div>
			</div> 
		</div>
	


</body>
</html>
