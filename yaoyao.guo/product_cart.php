<?php 

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";

$cart_itmes = getCartItems();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	

	<?php include "../parts/navbar.php"; ?>


	<div class="container">
		<h2>Cart</h2>
		 <div class="grid gap">
		 	<div class="col-xs-12 col-md-7">
		 		<div class="card soft"> <!--class="flat"-->
		 			<?=array_reduce($cart_itmes,'cartListTemplate')?>
		 		</div>	
		 	</div>
		 	<div class="col-xs-12 col-md-5">
		 		<div class="card soft flat">
		 			<?=cartTotals()?>
		 		</div>
		 	</div>
		 </div>
	</div>

</body>
</html>