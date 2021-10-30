
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include "../parts/meta.php"; ?>

	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../css/storetheme.css">
	<link rel="stylesheet" type="text/css" href="../lib/css/gridsystem.css">
</head>



<body>
	<?php include "../parts/navbar.php"; ?>
	

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>
			<p>This is item # <?= $_GET['id']?></p>
			<a href="product_list.php">Go Back</a>
		</div>
	</div>

</body>
</html>
