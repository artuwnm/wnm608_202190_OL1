<?php
include_once "../lib/php/functions.php";
include_once "../parts/templates.php";
$cart = getCartItems();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout Page</title>

	<?php include "meta_proj.php"; ?>	
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>
<body>
	
	<?php include "navbar_proj.php"; ?>	


	<div class="container">
		<div class="grid gap">
				<div class="col-xs-12 col-md-5">
		<div class="card soft">
			<h2>Item Review</h2>
			<div class="card-section">
			<?php
			echo array_reduce($cart,function($r,$o){
				$totalfixed = number_format((float)$o->model,2,'.','');
				return $r."<div class='display-flex'>
				<div class='flex-stretch'>$o->model</div>
				<div class='flex-none'>&dollar;$totalfixed</div>	
				</div>";
			}) ?>
			</div>
			<?= cartTotals(); ?>
		</div>
	</div>

		<div class="col-xs-12 col-md-7">
		<div class="card soft">
			<h2>Product Checkout</h2>	


			<h3>Address</h3>
				<form class="form">
					<div class="form-control">
						<label for="address-street" class="form-label"?>Street</label>
						<input id="address-street" type="text" placeholder="Street name" class="form-input">
					</div>

					<div class="form-control">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<label for="adress-city" class="form-label">City</label>
								<input id="adress-city" type="text" placeholder="City" class="form-input">
							</div>
					<div class="col-xs-12 col-md-6">
						<label for="address-state" class="form-label">State</label>
						<input id="address-state" type="text" placeholder="State" class="form-input">
					</div>
				</div>		
			</div>
			<div class="form-control">
				<div class="grid gap">
					<div class="col-xs-12 col-md-6">
						<label for="address-zip" class="form-label">Zip Code</label>
						<input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
					</div>
				<div class="col-xs-12 col-md-6">
					<label for="address-country" class="form-label">Country</label>
					<input id="address-country" type="text" placeholder="Country" class="form-input">
				</div>
			</div>
		</div>


				<h3>Payment</h3>
				<div class="form-control">
						<label for="payment-name" class="form-label"?>Full Name</label>
						<input id="payment-name" type="text" placeholder="Nameame" class="form-input">
					</div>

					<div class="form-control">
								<label for="payment-number" class="form-label">Card Number</label>
								<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
					</div>
					<div class="form-control">
							<div class="grid cap">
									<div class="col-xs-12 col-md-6">
						<label for="payment-expiration" class="form-label">Expiration</label>
						<input id="payment-expiration" type="text" placeholder="MM/YYYY" class="form-input">
					</div>
					<div class="col-xs-12 col-md-6">
						<label for="payment-cvv" class="form-label">CVV</label>
						<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
					</div>
				</div>
			</div>
				<div class="form-contgrol">
					<label for="payment-zip" class="form-label">Zip Code</label>
					<input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
				</div> 
				
				<div class="form-control">
					<!--<input type="submit" class="form-button" value="Submit"> -->
					<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
				</div>
			</form>
	
		</div>
	</div>



	</div>
</div>



</body>
</html>