<?php

include_once "../lib/php/functions.php";
include_once "../parts/templates.php"

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kickin Hard</title>

	<?php include "meta_proj.php"; ?>	
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>
<body class="flush">

	<?php include "navbar_proj.php"; ?>
		

  <div class="container">
	<h1 id="figures">KICKS ON FIRE</h1>
		<div style="width:100%;">
			<img src="../img/main1.png" alt style="width:100%;">
		</div>

		<div class="container">
			<h2>Latest Running Shoes</h2>
			<?php recommendedCategory("running"); ?>

			<h2>Latest Daily Shoes</h2>
			<?php recommendedCategory("daily"); ?>
		</div>

		<div class="form-control">
			<button type="button" class="form-button">
				<a href="product_list_proj.php">SHOP ALL SHOES</a>
			</button>
		</div>
	</div>
</body>
</html>