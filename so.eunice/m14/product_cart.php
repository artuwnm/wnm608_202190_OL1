<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();

$cart_items = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h3>In Your Cart</h3>
		<?php
			if(count($cart)) {
			?>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">

						<?= array_reduce(getCartItems(),'cartListTemplate') ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<?= cartTotals() ?> 
						<div class="card-section">
							<a href="../so.eunice/m14/product_checkout.php" class="form-button">Checkout</a>
						</div>
					</div>
				</div>
			</div>
			<?php
			} else {
				?>
				<div class="card soft">
					<p>No items in cart</p>
				</div>
				<h4>Other Recommendations</h4>
					<?php recommendedAnything(8); ?>
				<?php 
			}
		?>
		

	</div>
</body>
</html>