<div class="page-container look-gallery">
	<div class="title">
		<div class="colset col2 cf">
			<div class="left">
				<h1>#HotOffThe<span>Web</span></h1>
			</div>
			<div class="main">
				<div class="srch_div">
					<?PHP echo $this->Form->Create('Search', array( 'type'=>'get' ) );
					echo $this->Form->input('keyword', array('placeholder'=>'Product search', 'type'=>'text'));
					echo $this->Form->submit('Serach');
					echo $this->Form->end();
					?>
				</div>
				
				<div class="sorting right">
					<ul class="custdrop">
						<li><span class="ftitle">Sort by</span>
							<ul class="drop">
								<li><?php echo $this->Paginator->sort('name', 'Name'); ?></li>
								<li><?php echo $this->Paginator->sort('price', 'Price'); ?></li>
								<li><?php echo $this->Paginator->sort('mnf_name', 'Brand'); ?></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="colset col2 cf">
		<div class="left">
			<div class="nav-box">
				<h3 class="box-title">Categories</h3>
				<ul class="left-nav">
					<?php $url = $this->Html->url(array('controller'=>'Looks', 'action'=>'gallery'), true); ?>
					<?php echo $this->Menu->menu($categories, 'list'); ?>
				</ul>
			</div>
			<div class="nav-box">
				<h3 class="box-title">Brands</h3>
				<ul class="left-nav">
					<?php foreach($AllBrands as $brand){ ?>
						<li>
							<a href="<?php echo $this->Menu->qurl('brand', $brand['Product']['mnf_name']); ?>">
								<?php echo  $brand['Product']['mnf_name']; ?>
							</a>
						</li>
					<?php }; ?>
				</ul>
			</div>
		</div>
		<div class="main">
			<div class="product-listing">	
				<?php echo $this->Menu->qmenu(); ?>
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
										<a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'product_details', $_product['id']),true) ?>" class="i-title">
											<?php echo $this->Text->truncate($_product['mnf_name'],23,	array('ellipsis' => '...','exact' => 'false')); ?>
											<?php if(empty($_product['mnf_name'])){
												echo $this->Text->truncate($_product['advetiser_name'],23,	array('ellipsis' => '...','exact' => 'false'));
											}; ?>
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
					<div class="paginate">
					<?php	
					echo $this->Paginator->numbers(array(
					  //'modulus' => 4,   /* Controls the number of page links to display */
					  'first' => '< First',
					  'last' => 'Last >',
					  'separator'=>'</li><li>',
					  'before' => '<ul><li>', 'after' => '</li></ul>')
					);
					?>
					</div>
				<?php }else{
					echo '<div class="flash">Looks not fount!</div>';
				} ?>
			</div>
		</div>
	</div>
</div>