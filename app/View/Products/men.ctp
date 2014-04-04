<div class="page-container home-page">
	<div class="content_div1 cf">
		<div class="div_lft">
			<div class="div_txt">
				<div class="titl">Shop by Hot Products</div>
				<div class="txt1">Lorem Ipsum Standard text Portion for Dummy Text Area Lorem Ipsum<br /> Standard text Portion<br /> for Dummy Text.
				</div>
			</div>
			<div class="div_btn">
				<input type="button" value="Buy Now!" class="btnn1" />
			</div>
		</div>


		<div class="div_rgt">
			<div class="div_txt">
				<div class="titl">Shop by Member Looks</div>
				<div class="txt1">Lorem Ipsum Standard text Portion for Dummy Text Area Lorem Ipsum<br /> Standard text Portion<br /> for Dummy Text.</div>
			</div>
			<div class="div_btn">
				<input type="button" value="Buy Now!" class="btnn1" />
			</div>
		</div>
	</div>
	<div class="banr"></div>
	
	<?php if(!empty($looks)){ ?>
	<div class="look-listing">	
		<div class="heading">
			<div class="title-btn">
				<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'gallery', 'men')); ?>">View All</a>
			</div>
			<h1>#TREND<span>Setters</span></h1>
		</div>
		<div class="listing cf">
			<ul class="item-list cf">
				<?php foreach($looks as $mlook){?>
					<li>
						<div class="image">
							<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['id']),true) ?>"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a>
						</div>
						<div class="info">
							<p class="i-title"><?php echo $this->Text->truncate($mlook['Look']['caption_name'],20,	array('ellipsis' => '...','exact' => 'false')); ?></p>
							<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['Id']),true) ?>" class="like-btn right small"><?php echo isset($mlook['Look']['likes']) ?></a>
							
							<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'profile', $mlook['Look']['user_id']),true) ?>" class="user-name">
								<?php echo $this->Text->truncate($mlook['User']['name'],20,	array('ellipsis' => '...','exact' => 'false')); ?>
							</a>
						</div>
					</li>
				  <?php } ?>
			</ul>
		</div>
	</div>
	<?php } ?>
	<div class="product-listing">	
		<div class="heading">
			<div class="title-btn">
				<a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'gallery','men'),true) ?>">View All</a>
			</div>
			<h1>#NewOnThe<span>Web</span></h1>
		</div>
		<?php if(!empty($products)){ ?>
			<div class="listing cf">
				<ul class="item-list cf">
					<?php foreach($products as $product){
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
									<?php echo $this->Text->truncate($_product['name'],23,	array('ellipsis' => '...','exact' => 'false')); ?>
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