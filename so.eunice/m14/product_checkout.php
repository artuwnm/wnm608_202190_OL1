<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";


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
				<div class="col-xs-12 col-md-5">
					<div class="card soft">
						<h3>Item Review</h3>
						<div class="card-section">
							
							<?php 
							echo array_reduce($cart,function($r,$o){
								$totalfixed = number_format($o->total,2,'.','');
								return $r."<div class='display-flex'>
									<div class='flex-stretch'>$o->title</div>
									<div class='flex-none'>&dollar;$totalfixed</div>
								</div>";
							}) ?>
						</div>
						<?= cartTotals(); ?>
					</div>
				</div>

				<div class="col-xs-12 col-md-7">
						<div class="container card soft">
							<h3>Product Checkout</h3>
							<h4 id="controls">Billing Info</h4>

							<form>
								<div class="form-control">
									<label class="form-label">First Name</label>
									<input type="text" placeholder="John" class="form-input">
								</div>

								<div class="form-control">
									<label class="form-label">Last Name</label>
									<input type="text" placeholder="Smith" class="form-input">
								</div>

								<div class="form-control">
									<label class="form-label">Address 1</label>
									<input type="text" placeholder="123 10th Street" class="form-input">
								</div>

								<div class="form-control">
									<label class="form-label">Address 2 (Apt#)</label>
									<input type="text" placeholder="Unit A" class="form-input">
								</div>

								<div class="form-control display-flex flex-align-center">
									<div class="flex-none">
										<label class="form-label">City</label>
									</div>
									<div class="flex-stretch">
										<input type="text" placeholder="New York City" class="form-input">
									</div>
									<div class="flex-none">
										<label class="form-label">Zipcode</label>
									</div>
									<div class="flex-stretch">
										<input type="number" placeholder="10013" class="form-input">
									</div>
								</div>
								<div class="form-control">
									<label class="form-label">State</label>
									<input type="text" placeholder="New York" class="form-input">
								</div>

								<h4 id="controls">Credit Card Information</h4>

								<div class="form-control">
									<label class="form-label">Card Number</label>
									<input type="number" placeholder="1234 1234 1234 1234" class="form-input">
								</div>

								<div class="form-control display-flex flex-align-center">
									<div class="flex-none">
										<label class="form-label">Expiration</label>
									</div>
									<div class="flex-stretch">
										<input type="text" placeholder="MM/YY" class="form-input">
									</div>
									<div class="flex-none">
										<label class="form-label">CVV</label>
									</div>
									<div class="flex-stretch">
										<input type="number" placeholder="CVV" class="form-input">
									</div>
								</div>
								<div class="form-control">
									<label class="form-label">Zip Code</label>
									<input type="number" placeholder="10011" class="form-input">
								</div>

								<div class="form-control">
					
									<p><a href="../so.eunice/m14/product_confirmation.php" class="form-button">Complete Checkout</a></p>
								</div>
							</form>

						</div>
				</div>

			</div>
			
		</div>
</body>
</html>






















