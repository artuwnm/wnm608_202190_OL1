<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?><!doctype html>

<html lang="en"> 
<head>
    <title>OH MY TOKYO</title>
    <?php include "parts/meta.php"; ?>
    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/index.js"></script>
    <script>
        queryAllPromotion();
    </script>
</head>
<body class="flush">
    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <div class="figure top-img soft">
            <div class ="flex-stretch">     
                <img src="img/home/home_cover.JPEG" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="product-title">New Arrivals</h2>
        <?php recommendedCategory("souvenir"); ?>
        <h2 class="product-title">Lastest Vintage Toy</h2>
        <?php recommendedCategory("vintage"); ?>
    </div>


        <div style=" margin-top:50px"></div>

        <!-- .container>article#article$.article*4>h2{Article $}+div.article-body>p*3>lorem40 -->
        <div class="container">
            <article id="article2"  class="article card hard">
            <h2>How we ship our love</h2>
                <div class="article-body">
                <p>You will love these products! Free shipping on orders over $75 </p>  
        	   </div>
          </article>
        </div>
        


        
</body>                 
</html>







