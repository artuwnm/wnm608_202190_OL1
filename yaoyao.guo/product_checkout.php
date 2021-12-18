<?php

include_once "lib/php/functions.php";

include_once "parts/templates.php";
//$cart_items = getCartItems(); //Order Summary

$cart = getCartItems();



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
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">	
					<h2>Prodct Checkout</h2>		
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
						
						
					</form>
				</div><!--//card soft-->
			</div><!--//col-xs-12 col-md-7-->

			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<h2>Item Review</h2>
					<div class="card-section">
					
					<?php
					echo array_reduce($cart, function($r,$o){
						$totalfixed = number_format($o->total,2,'.','');
						return $r."
							<div class='display-flex card-section' style='align-items:center;'>
								<div class='images-thumbs'><img src='$o->thumbnail'></div>
								<div>
									<div>$o->name($o->amount)</div>
									<div style='margin-top:0.5em;'><strong>&dollar;$totalfixed</strong></div>
								</div>
						
							</div>";
					})?>


					</div><?= cartTotals();?>
			
					<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
					
				</div>
			</div>	
		</div><!--//grid gap-->
	</div><!--//container-->

</body>
</html>