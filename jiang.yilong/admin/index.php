<?php

include "../lib/php/functions.php";

$empty_product = (object)[
    "name"=>"aj1awok",
    "description"=>"Good shoes",
    "price"=>"170",
    "category"=>"man",
    "thumbnail"=>"aj1awok.jpg",
    "images"=>"aj1awok.jpg",
    "quantity"=>"1"
];

// LOGIC
// try {
   //$conn = makePDOConn();
   //switch($_GET['action']) {
     
      //case "update":
      //$statement = $conn->prepare("UPDATE
          //`products`
          //SET
           // `name`=?,
            //`price`=?,
            //`quantity`=?,
            //`category`=?,
            //`decription`=?,
            //`thumbnail`=?,
            //`images`=?,
            //`date_modify`=NOW()
         //WHERE `id`=?
         //");
      //$statement->execute([
        //$_POST['product-name'],
        //$_POST['product-price'],
        //$_POST['product-quantity'],
        //$_POST['product-category'],
        //$_POST['product-decription'],
        //$_POST['product-thumbnail'],
        //$_POST['product-images'],
        //$_GET['id']
      //]);
         //header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
         //break;


      //case "create":

      //$statement = $conn->prepare("INSERT INTO
          //`products`
          
           //( `name`,
             //`price`,
             //`quantity`,
             //`category`,
             //`decription`,
            // //`thumbnail`,
             //`images`,
             //`date_create`,
             //`date_modify`
             //)
         //VALUES (?,?,?,?,?,?,?,NOW(),NOW())
         //");
      //$statement->execute([
        //$_POST['product-name'],
        //$_POST['product-price'],
        //$_POST['product-quantity'],
        //$_POST['product-category'],
        //$_POST['product-decription'],
        //$_POST['product-thumbnail'],
        //$_POST['product-images']
      //]);
      //$id = $conn->lastInsertId();
         //header("location:{$_SERVER['PHP_SELF']}?id=$id");
         //break;


      //case "delete":

      //$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
      //$statement->execute([$_GET['id']]);
         //header("location:{$_SERVER['PHP_SELF']}");
         //break;   
   //}
//} catch()(PDOException $e) {
   //die($e->getMessage());
//}

















// TEMPLATES
function productListItem($r,$o) {
return $r.<<<HTML
<div class="card soft">
	<div class="display-flex">
	   <div class="flex-none images-thumbs"><img src='/img/$o->thumbail'></div>
	   <div class="flex-stretch" style="padding:1em">$o->name</div>
	   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
	</div>
</div>
HTML;
}


function showProductPage($o) {

$id = $_GET['id'];
$addoredit = $id == "new" ?"Add" : "Edit";
$createorupdate = $id == "new" ?"create" : "update";
$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='img/$o'>";});  



//heredoc
$display = <<<HTML
   <div>
      <h2>$o->name</h2>
      <div class="form-control">
         <label class="form-label">Price</label>
         <span>&dollar;$o->price</span>
      </div>

      <div class="form-control">
         <label class="form-label">Quantity</label>
         <span>$o->quantity</span>
      </div>
      <div class="form-control">
         <label class="form-label">Category</label>
         <span>$o->Category</span>
      </div>
      <div class="form-control">
         <label class="form-label">Description</label>
         <span>$o->description</span>
      </div>

      <div class="form-control">
         <label class="form-label">Thumbnail</label>
         <span class="images-thumbs"><img src='/img/$o->thumbnail'></span>
      </div>

      <div class="form-control">
         <label class="form-label">Other Images</label>
         <span class="images-thumbs">$images</span>
      </div>
   </div>
HTML;



//heredoc
$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
   <h2>$addoredit Product</h2>
   <div class="form-control">
      <label for="product-name" class="form-label">Name</label>
      <input type="text" name="product-name" id ="product-name" value="$o->name" placeholder="Product Name" class="form-input">
   </div>

   <div class="form-control">
      <label for="product-quantity" class="form-label">Quantity</label>
      <input type="Number" name="product-quantity" id ="product-quantity" min="0" max="10" step="1" value="$o->quantity" placeholder="Product Quantity" class="form-input">
   </div>

   <div class="form-control">
      <label for="product-price" class="form-label">Price</label>
      <input type="Number" name="product-price" id ="product-price" min="0" max="10000" step="0.01" value="$o->price" placeholder="Product Price" class="form-input">
   </div>

   <div class="form-control">
      <label for="product-category" class="form-label">Category</label>
      <input type="text" name="product-category" id ="product-category" value="$o->category" placeholder="Product Category" class="form-input">
   </div>

   <div class="form-control">
      <label for="product-description" class="form-label">Description</label>
      <textarea name="product-description" id ="product-description" placeholder="Product Description" class="form-input">$o->description</textarea>
   </div>

   <div class="form-control">
      <label for="product-thumbnail" class="form-label">Thumbnail</label>
      <input type="text" name="product-thumbnail" id ="product-thumbnail" value="$o->thumbnail" placeholder="Product Category" class="form-input">
   </div>

   <div class="form-control">
      <label for="product-images" class="form-label">Other Images</label>
      <input type="text" name="product-images" id ="product-images" value="$o->images" placeholder="Product Category" class="form-input">
   </div>
   <div class="form-control">
      <input class="form-button" type="submit" value="SUBMIT">
   </div>
      
</form>
HTML;

$output = $id == "new" ? "<div class='card soft'>$form</div>" :
   "<div class='grid gap'>
      <div class='col-xs-12 col-md-6'><div class='card soft'>$display</div></div>
      <div class='col-xs-12 col-md-6'><div class='card soft'>$form</div></div>
   </div>
";

$delete = $id == "new" ? "" : "<button class='round-btn'><a href ='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a></button>";

echo <<<HTML
   <div class="card soft">
   	<nav class="display-flex">
   	     
   	   <div class="flex-stretch"><button class="round-btn"><a href="{$_SERVER['PHP_SELF']}">Back</a></button></div>
   	   <div class="flex-none">$delete</div>
   	</nav>
   </div>
$output
HTML;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Product Admin Page</title>

   <?php include "../parts/meta.php"; ?>

</head>
<body>
   <header class="navbar">
      <div class="container display-flex">
         <div class="flex-none">
            <h1 style="color:white; padding: 1em;">Product Admin</h1>

         </div>
         <div class="flex-stretch"></div>
         <nav class="nav nav-flex flex-none">
            <ul>
               <li><a href="<?=$_SERVER['PHP_SELF'] ?>">Product List</a></li>
               <li><a href="<?=$_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
            </ul>
         </nav>
      </div>
   </header>


   
   <div class="container"></div>

     <?php 
         if(isset($_GET['id'])) {
           showProductPage(
           	 $_GET['id']=="new" ?
           	   $empty_product :
           	   makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
           	);
         } else {


         ?>

         <h2>Product List</h2>

            	<?php 
            	
            	$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");
            	echo array_reduce($result,'productListItem');
            	
            	
            	
            	?>
            


        <?php } ?>

   </div>
 </body>