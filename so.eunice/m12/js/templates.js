

const listItemTemplate = templater (o=>`
<a class="col-xs-12 col-md-3" href="../so.eunice/m12/product_item.php?id=${o.id}">
	<figure class="figure product-overlay display-flex flex-column">
		<div>
			<img src="m12/img/${o.thumbnail}" alt="">
		</div>
		<figcaption>
			<div class="caption-body">
				<div>${o.title}</div>
				<div>&dollar;${o.price.toFixed(2)}</div>
			</div>
		</figcaption>
	</figure>
</a>

`);