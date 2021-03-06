<?php
$_user = $looks['User'];
$_look = $looks['Look'];
$_product = $looks['Product'];
?>
<div class="detailwrap">
	<div class="item-detail cf">
		<div class="look-pics image-box">
			<div class="main-image">
				<a href="<?php echo $this->webroot; ?>img/Looks/big/<?php echo $_look['image']; ?>" class="fancy"><?php echo $this->Html->image('Looks/home/'.$_look['image']);?></a>
			</div>
			<div class="slideshow">
				<ul>
					<?php foreach($memberImages as $mimage){?>
						<li>
							<a class="fancy" rel="gallery" href="<?php echo $this->webroot; ?>img/Looks/big/<?php echo $mimage['Look']['image']; ?>"><?php echo $this->Html->image('Looks/small/'.$mimage['Look']['image']);?></a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="item-info">
			<div class="look-info">
				<p class="caption"><?php echo $_look['caption_name']; ?></p>
				<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'Profile', $_look['user_id']),true) ?>"><?php echo $_user['nickname']; ?></a>
			</div>
			
			<?php if(!empty($_product['mnf_name'])){ ?><h2 class="brand"><?php echo $_product['mnf_name']; ?></h2><?php }; ?>
			<h1 class="item-title"><?php echo $_product['name']; ?></h1>
			<div class="price"><?php echo !empty($_product['currency']) ? $_product['currency'] : '$'; ?> <?php echo $_product['price']; ?></div>
			<div class="detail">
				<h3 class="subtitle">Detail</h3>
				<?php echo $_product['descrition']; ?>
			</div>
			<div class="buy-button">
				<?php $trakker = "";				
					$referid=$_user['member_id'];
					$cid = isset($loggeduser['member_id']) ? $loggeduser['member_id'] : 'ESMGUEST';
				if( $_product['type'] == 1){
					$trakker = "&u1=$referid-$cid";
				}else if($_product['type'] == 0){
					$trakker = "&sid=$referid-$cid";
				} ?>
				<a target="_blank" class="button buy-btn primary" href="<?php echo $_product['buy_url'].$trakker; ?>">Buy @ <?php echo $_product['advetiser_name']; ?></a>
			</div>
		</div>
		<div class="item-action">
			<div class="like">
				<?php if(!empty($isLiked) && $isLiked['Like']['id']){
					echo $this->Html->link($_look['likes'], array('action' => 'ullike', $isLiked['Like']['id']), array('class'=>'like-btn unlike'));
				}else{
				
				
					echo $this->Html->link($_look['likes'], array('action' => 'Like', $_look['Id']), array('class'=>'like-btn'));
					
					

					
					
				} ?>
			</div>
			
			<?php echo $this->Html->link("Add to Wishlist", array( 'controller' => 'Users', 'action' => 'add_wishlist', $_look['Id'], 1), array('class'=>'button primary')); ?>
		</div>
	</div>
	
	<?php if(isset($memberLooks)){?>
		<div class="look-listing">
			<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'looks', $_user['id'])); ?>" class="title-btn right">View All</a>
			<h1 class="sec-title bordered"><?php echo $_user['nickname']; ?>'s Looks</h1>
			<div class="listing cf">
				<ul class="item-list cf">
					<?php foreach($memberLooks as $mlook){?>
						<li>
							<div class="image">
								<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['id']),true) ?>"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a>
							</div>
							<div class="info">
								<p class="i-title"><?php echo $this->Text->truncate($mlook['Look']['caption_name'],20,	array('ellipsis' => '','exact' => 'false')); ?></p>
								
								<?php if(!empty($mlook['Like'])){
									echo $this->Html->link($mlook['Look']['likes'], array('action' => 'ullike', $mlook['Like'][0]['id']), array('class'=>'like-btn small right unlike'));
								}else{
									echo $this->Html->link($mlook['Look']['likes'], array('action' => 'Like', $mlook['Look']['id']), array('class'=>'like-btn small right'));
								} ?>
								
								
								
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $mlook['Look']['user_id']),true) ?>" class="user-name">
									<?php echo $this->Text->truncate($mlook['User']['nickname'],50,	array('ellipsis' => '','exact' => 'false')); ?>
								</a>
							</div>
						</li>
						<li>
							
						</li>
					  <?php }
					

					  ?>
				</ul>
			</div>
			
		</div>
	<?php } ?>	
</div>