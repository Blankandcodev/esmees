<div class="page-container home-page">
	
	
	
	
	<div class="product-listing">	
		<div class="heading">
			
			<h1>#SEARCH<span>Results</span></h1>
		</div>
		<?php if(!empty($allProducts)){ ?>
			<div class="listing cf">
				<ul class="item-list cf">
					<?php foreach($allProducts as $product){
						$_product = $product['Product'];
					?>
						<li>
							<div class="image">
								<?php if($_product['image_url']!=NULL){
									$image = $_product['image_url'];
								}else{
									$image="product.jpg";
								}
								$image = $this->Html->image($image, array('class'=>'mainimg')); ?>
								<a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'product_details', $_product['id']),true) ?>"><?php echo $image; ?></a>
							</div>
							<div class="info">
								<a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'product_details', $_product['id']),true) ?>" class="i-title">
									<?php echo $this->Text->truncate($_product['name'],23,	array('ellipsis' => '','exact' => 'false')); ?>
								</a>
								<div class="price-box">
									<a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'product_details', $_product['id']),true) ?>">
										<?php if($_product['sale_price'] != '' && $_product['sale_price'] < $_product['price']){ ?>
											<span class="price lthru"><?php echo $this->Number->currency($_product['price'], 'USD'); ?></span>
											<span class="sale-price"><?php echo $this->Number->currency($_product['sale_price'], 'USD'); ?></span>
										<?php }else{ ?>
											<span class="price"><?php echo $this->Number->currency($_product['price'], 'USD'); ?></span>
										<?php } ?>
									</a>
								</div>
							</div>
						</li>
					  <?php } ?>
				</ul>
			</div>
		<?php }else{
			echo '<div class="flash">No looks uploaded yet!</div>';
		} ?>
	</div>
</div>