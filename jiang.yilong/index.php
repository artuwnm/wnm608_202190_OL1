<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Home</title>
   <?php include "parts/meta.php"; ?>
</head>
<body class="flush">
   <?php include "parts/navbar.php"; ?>


   <div class="view-window" style="background-image:url(img/R.jpg)">
      
    </div>
   <div class="container">
      
      <article id="article1" class="article card hard">
         <div class="display-flex flex-align-center">
            <div class="flex-stretch">
               <h1 style = text-align:center;>Welcome to Getit</h1>
               <div class="article-body">
                  <p>This is a website where you can buy limited-edition sneakers and other fashion items. When you can't buy your favorite sneakers, you can browse our website. When you doubt whether the sneakers in your hand are genuine, you can also ask for our help.</p>
                  
               </div>
            </div>
         </div>
      </article>
   </div>
   <div class="contain">

      <h2>Man</h2>
      <?php recommendedCategory("man");?>
      <h2>Woman</h2>
      <?php recommendedCategory("woman");?>



   </div>
</body>
</html>