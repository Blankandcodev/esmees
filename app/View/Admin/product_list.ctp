<?php $allProducts = $products['products']['product'];
foreach($allProducts as $_product){ ?>
	<pre style="width:600px; height:150px; overflow:auto;"><?php print_r($_product); ?></pre>
	
	<div class="product"><img width="300" src="<?php echo $_product['image-url'] ?>" /></div>
	<div class="product"><img width="300" src="<?php echo $_product['image-url'] ?>" /></div>
	
<?php }; ?>