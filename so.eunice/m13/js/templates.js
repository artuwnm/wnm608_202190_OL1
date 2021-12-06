

const listItemTemplate = templater (o=>`
<a class="col-xs-12 col-md-3" href="../so.eunice/m13/product_item.php?id=${o.id}">
	<figure class="figure product-overlay display-flex flex-column">
		<div>
			<img src="m13/img/${o.thumbnail}" alt="">
		</div>
		<figcaption>
			<div class="caption-body">
				<div>${o.title}</div>
				<div>&dollar;${ parseFloat(o.price).toFixed(2) }</div>
			</div>
		</figcaption>
	</figure>
</a>

`);