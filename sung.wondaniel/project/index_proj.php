<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kickin Hard</title>

	<?php include "meta_proj.php"; ?>	
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Racing+Sans+One&display=swap" rel="stylesheet">

</head>
<body>
		
  <header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
  	         <h1>Kickin Hard</h1>
        </div>
        <div class="flex-stretch"></div>    
          <nav class="flex-none nav">
            <ul class="container display-flex">
                <li ><a href="index_proj.php">Home</a></li>
                <li ><a href="product_list_proj.php">Store</a></li>
                <li ><a href="cart_proj.php">Cart</a></li>
            </ul>
          </nav>
    </div>
  </header>

  <div class="container">
	<h1 id="figures">KICKS ON FIRE</h1>

		<div class="grid gap" id="productgrids">	
			<div class="col-xs-12 col-md-4">
					<figure class="figure product">
							<img src="../img/grayvapormax.jpg" alt="">
							<figcaption>
								<div>Nike Vapor Max</div>
				
							</figcaption>	
					</figure>
			</div>
			<div class="col-xs-12 col-md-4">
					<figure class="figure product">
							<img src="../img/97blackairmax.jpg" alt="">
							<figcaption>
								<div>'97 Air Max Black</div>
							</figcaption>	
					</figure>
			</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product">
							<img src="../img/whitecdgconverse.jpg" alt="">
							<figcaption>
								<div>CDG X Converse White Low</div>
				
							</figcaption>	
					</figure>
			</div>


		</div>

		<div class="form-control">
			<button type="button" class="form-button">
				<a href="product_list_proj.php">SHOP ALL SHOES</a>
			</button>
		</div>



</body>
</html>