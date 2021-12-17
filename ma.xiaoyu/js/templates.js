

const listItemTemplate = templater((o,i,a)=>`
<a class="col-xs-12 col-md-4" href='product_item.php?id=${o.id}'>
    <figure class="figure product display-flex-column">
        <div class ="flex-stretch">
            <img src="img/store/${o.thumbnail}" alt="">
        </div>
        <figcaption class="flex-none">
            <div>&dollar;${o.price.toFixed(2)}</div>
            <div>${o.name}</div>
        </figcaption>
    </figure>
</a>
`);


const listPromotionItemTemplate = templater((o,i,a)=>`
<a class="col-xs-6 col-md-3" href='product_item.php?id=${o.id}'>
    <figure class="card soft figure product">
        <div class="flex-stretch">
            <img src="img/store/${o.thumbnail}" alt="" class="media-image">
        </div>
    </figure>
</a>
`);