


<div class="page-container home-page">
	
	<?php if(!empty($banners)){ ?>
		<div class="banner-container cf">
			<?php foreach($banners as $banner){ ?>
				<div class="banner <?php echo count($banners) > 1 ? 'half '.$banner['Banner']['section'] : 'full'.$banner['Banner']['section']; ?>">
					<div class="banner-img">
						<?php echo $this->Html->image('Banners/'.$banner['Banner']['image']);?>
					</div>
					<div class="caption">
						<p class="ctitle"><?php echo $banner['Banner']['heading'] ?></p>
						<p class="cdesc"><?php  echo $banner['Banner']['description'] ?> </p>
						<a  target="_blank" class="btn1" href="<?php  echo $banner['Banner']['buy_url'] ?>">Buy Now</a>				
					</div>
				</div>
			<?php } ?>
		</div>
	<?php } ?>
	
	<div class="clr"></div>
	<?php if(!empty($looks)){ ?>
	<div class="look-listing">	
		<div class="heading">
			<div class="title-btn">
				<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'gallery', 'men')); ?>">Men</a> /
				<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'gallery', 'women')); ?>">Women</a>
			</div>
			<h1>#TREND<span>Setters</span></h1>
		</div>
		<div class="listing cf">
			<ul class="item-list cf">
				<?php foreach($looks as $mlook){?>
					<li>
						<div class="image">
							<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['Id']),true) ?>"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a>
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
				<a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'gallery','men'),true) ?>">Men</a> /
				<a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'gallery','women'),true) ?>">Women</a>
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
	
	
	<div class="banner-img">
		<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'register')); ?>"><img src="<?php echo $this->webroot; ?>img/img6.png" /></a>
	</div>
</div>