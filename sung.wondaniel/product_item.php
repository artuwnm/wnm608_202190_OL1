<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>	
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>	


	<div class="container">
		<div class="card soft">
			<h2>Cart</h2>	

			<p>This is item # <?= $_GET['id'] ?></p>
		</div>
	</div>



</body>
</html>