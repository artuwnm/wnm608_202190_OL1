<?php


function productListTemplate($r,$o) {

return $r.<<<HTML
<a class="col-xs-12 col-md-4" href='product_item.php?id=$o->id'>
    <figure class="figure product display-flex-column">
        <div class ="flex-stretch">
            <img src="img/store/$o->thumbnail" alt="">
        </div>
        <figcaption class="flex-none">
            <div>&dollar;$o->price
            <div>$o->name</div>
            <i class="icon"></i>
            </div>
        </figcaption>
    </figure>
</a>
HTML;
}





Function cartListTemplate($r,$o){
return $r. <<<HTML
<div class="display-flex">
  <div class="flex-none images-thumbs">
     <img src="img/store/$o->thumbnail"> 
  </div>
  <div class="flex-stretch">
     <strong>$o->name</strong>
     <div>Delete</div>
  </div>
  <div class="flex-none">
      &dollar;$o->price
      
  </div>
    
</div>

HTML;
}