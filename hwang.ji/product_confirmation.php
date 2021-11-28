<?php
include_once "lib/php/functions.php";
resetCart();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	

	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft" style="text-align: center;">
		  <h2 style="margin-bottom: 2em;">Thank you for your purchase!</h2>
		  <p><span class="round-btn"><a href="product_list.php" >Continue Shopping</a></span></p>
		</div>
	</div>

</body>
</html>