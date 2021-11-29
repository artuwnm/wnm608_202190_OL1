<?php include_once "lib/php/functions.php"; ?>
<!doctype html>

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
<body>
    <?php include "parts/navbar.php"; ?>

      <div class="container">
         <div class="figure top-img soft">
            <div class ="flex-stretch">     
            <img src="img/home/home_cover.JPEG" alt="">
        </div>
        </div>
       </div>
  
      <div class="container">
        <h2  style="text-align: center; margin-top:50px">New Arrivals</h2>
        <div class="promotion-list grid gap xs-small md-medium"></div>
      </div>





        <!-- .container>article#article$.article*4>h2{Article $}+div.article-body>p*3>lorem40 -->
        <div class="container">
        	<article id="article1" class="article card hard">
            <div class="display-flex-aligh-center">
              <div class="flex-stretch"> 
              <h2>Love for our little beast around the world</h2>
              </div>
              <div class="flex-none">
        	       <small> Last updated on 9/19/2021</small>
              </div>
            </div>
        		<div class="article-body">
        			<p></p>
            </div>	
          </article>
          <article id="article2"  class="article card hard">
             <h2>How we ship our love</h2>
             <div class="article-body">
                <p>We sell sweaters for dog with love :))))) We donate 5% of every order to animal rescue non-profits. Free shipping on orders over $75 </p>  
        	   </div>
          </article>
        </div>
        <!-- <div class="view-window" style="background-color:var(--color-dark-background)"></div>   -->

    </body>             
    
</html>