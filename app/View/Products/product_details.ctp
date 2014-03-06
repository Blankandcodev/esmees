<?php
$_product = $products['Product'];
?>
<div class="detailwrap">
	<div class="item-detail cf">
		<div class="look-pics image-box">
			<div class="main-image">
				<a href="<?php echo $_product['image_url']; ?>" class="fancy"><img src="<?php echo $_product['image_url']; ?>"/></a>
			</div>
		</div>
		<div class="item-info">
			<?php if(!empty($_product['mnf_name'])){ ?><h2 class="brand"><?php echo $_product['mnf_name']; ?></h2><?php }; ?>
			<h1 class="item-title"><?php echo $_product['name']; ?></h1>
			<div class="price">
				<?php $currency = !empty($_product['currency']) ? $_product['currency'] : 'USD';
				if($_product['sale_price'] != '' && $_product['sale_price'] < $_product['price']){ ?>
					<span class="price lthru"><?php echo $this->Number->currency($_product['price'], $currency); ?></span>
					<span class="sale-price"><?php echo $this->Number->currency($_product['sale_price'], $currency); ?></span>
				<?php }else{ ?>
					<span class="price"><?php echo $this->Number->currency($_product['price'], $currency); ?></span>
				<?php } ?>
			</div>
			<div class="detail">
				<h3 class="subtitle">Detail</h3>
				<?php echo $_product['descrition']; ?>
			</div>
			<div class="buy-button">
				<?php $trakker = "";				
				$referid = 'ESMADMIN';
				$cid = isset($loggeduser['member_id']) ? $loggeduser['member_id'] : 'GUEST';
				if( $_product['type'] == 1){
					$trakker = "&u1=$referid-$cid";
				}else if($_product['type'] == 0){
					$trakker = "&sid=$referid-$cid";
				} ?>
				<a target="_blank" class="button buy-btn primary" href="<?php echo $_product['buy_url'].$trakker; ?>">Buy @ <?php echo $_product['advetiser_name']; ?></a>
			</div>
		</div>
		<div class="item-action">
			<?php echo $this->Html->link("Add to Wishlist", array( 'controller' => 'Users', 'action' => 'add_wishlist', $_product['id'], 0), array('class'=>'button primary')); ?>
		</div>
	</div>
	
	<?php if(isset($similarLooks)){?>
		<div class="look-listing">
			<h1 class="sec-title bordered">Who wears this</h1>
			<div class="listing cf">
				<ul class="item-list cf">
					<?php foreach($similarLooks as $mlook){?>
						<li>
							<div class="image">
								<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['id']),true) ?>"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a>
							</div>
							<div class="info">
								<p class="i-title"><?php echo $this->Text->truncate($mlook['Look']['caption_name'],20,	array('ellipsis' => '...','exact' => 'false')); ?></p>
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['id']),true) ?>" class="like-btn right small"><?php echo $mlook['Look']['likes'] ?></a>
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $mlook['Look']['user_id']),true) ?>" class="user-name">
									<?php echo $this->Text->truncate($mlook['User']['name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
								</a>
							</div>
						</li>
					  <?php } ?>
				</ul>
			</div>
		</div>
	<?php } ?>	
	
	<?php if(isset($brandLooks)){?>
		<div class="look-listing">
			<h1 class="sec-title bordered">Who wears "<?php echo $_product['mnf_name'] ?>"</h1>
			<div class="listing cf">
				<ul class="item-list cf">
					<?php foreach($brandLooks as $mlook){?>
						<li>
							<div class="image">
								<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['id']),true) ?>"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a>
							</div>
							<div class="info">
								<p class="i-title"><?php echo $this->Text->truncate($mlook['Look']['caption_name'],20,	array('ellipsis' => '...','exact' => 'false')); ?></p>
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['id']),true) ?>" class="like-btn right small"><?php echo $mlook['Look']['likes'] ?></a>
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $mlook['Look']['user_id']),true) ?>" class="user-name">
									<?php echo $this->Text->truncate($mlook['User']['name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
								</a>
							</div>
						</li>
					  <?php } ?>
				</ul>
			</div>
		</div>
	<?php } ?>	
</div>