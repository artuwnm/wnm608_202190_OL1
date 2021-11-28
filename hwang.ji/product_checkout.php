<?php

include_once "lib/php/functions.php";

//개별 추가
include_once "parts/templates.php";
$cart_itmes = getCartItems();




?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">

		<!-- products form cart 개별추가-->
		<div class="container">
			<div class="col-xs-12 col-md-7">
				<h2>ORDER SUMMARY</h2>
		 		<div class="card soft"> <!--class="flat"-->
		 			<?=array_reduce($cart_itmes,'cartListTemplateForCheckout')?>
		 			<?=cartTotalsForCheckout()?>
		 	 	</div>	
			</div>
		</div>
		<!-- //products form cart -->
		
		
   		<h2>Prodct Checkout</h2>
		<div class="card soft">			
		   <!-- <h2>Prodct Checkout</h2> -->

			<form class="form">
				<h3>Address</h3>
				<div class="form-control">
					<label for="address-street" class="form-label">Street</label>
					<input id="address-street" type="text" placeholder="Street name" class="form-input">
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="address-city" class="form-label">City</label>
							<input id="address-city" type="text" placeholder="City" class="form-input">
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
					<label for="payment-name" class="form-label">Full name</label>
					<input id="payment-name" type="text" placeholder="Full name" class="form-input">
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="payment-number" class="form-label">Card Number</label>
							<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="payment-cvv" class="form-label">CVV</label>
							<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
						</div>
					</div>
				</div>
				<div class="form-control">	
					<label for="Payment-zip" class="form-label">Zip Code</label>
					<input id="Payment-zip" type="text" placeholder="Zip Code" class="form-input">
				</div>
				<div class="form-control">
					<!-- <input type="submit" class="form-button" value="SUBMIT"> -->
					<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
				</div>
				
			</form>
		</div>
	</div>

</body>
</html>