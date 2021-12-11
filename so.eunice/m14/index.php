<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book World</title>
	<?php include "parts/meta.php"; ?>
</head>
<body class="flush">
	<?php include "parts/navbar.php"; ?>

		<div class="view-window"><h1>Phantom by Jo Nesbo</h1></div>


		<div class="container">
			<h3>Latest Fictions</h3>
			<?php 
			recommendedCategory("fiction");
			?>

			<h3>Latest Design Books</h3>
			<?php 
			recommendedCategory("design");
			?>
		</div>



			</div>
		</div>
	
	</div>

</body>
</html>