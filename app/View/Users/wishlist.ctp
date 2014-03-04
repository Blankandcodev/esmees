<div class="page-container user-profile">
	<div class="title">
		<a class="back-link" href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img class="left" src="<?php echo $this->webroot; ?>img/img17.png" /> &nbsp;Back</a>
		<h1>My Wishlist</h1>
	</div>
		<div class="look-listing">
			<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'wishlist')); ?>" class="title-btn right">View All</a>
			<h1 class="sec-title bordered"></h1>
	<?php if(!empty($wishLists)){ ?>
			<div class="listing cf">
				<ul class="users-list cf">
					<?php foreach($wishLists as $item){
						$usr = $item['User'];
						if(!empty($item['Product']['id']) && empty($item['Look']['Id'])){
							$itm = $item['Product']; ?>
							<li>
								<div class="image">
									<?php if($itm['image_url']!=NULL){
										$image = $itm['image_url'];
									}else{
										$image="product.jpg";
									}
									$image = $this->Html->image($image, array('class'=>'mainimg')); ?>
									<a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'product_details', $itm['id']),true) ?>"><?php echo $image; ?></a>
								</div>
								<div class="info">
									<a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'product_details', $itm['id']),true) ?>" class="user-name">
										<?php echo $this->Text->truncate($itm['name'],25,	array('ellipsis' => '...','exact' => 'false')); ?>
									</a>
									<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'delete_wishlist', $item['Wishlist']['id'])); ?>" class="del-icn">Delete</a>
								</div>
							</li>
						<?php }else if(empty($item['Product']['id']) && !empty($item['Look']['Id'])){
							$itm = $item['Look']; ?>
							<li>
								<div class="image">
									<?php if($itm['image']!=NULL){
										$image='Looks/home/'.$itm['image'];
									}else{
										$image="product.jpg";
									}
									$image = $this->Html->image($image, array('class'=>'mainimg')); ?>
									<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $itm['Id']),true) ?>"><?php echo $image; ?></a>
								</div>
								<div class="info">
									<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $itm['Id']),true) ?>" class="user-name">
										<?php echo $this->Text->truncate($itm['caption_name'],25,	array('ellipsis' => '...','exact' => 'false')); ?>
									</a>
									<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'delete_wishlist', $item['Wishlist']['id'])); ?>" class="del-icn">Delete</a>
								</div>
							</li>
						<?php } ?>
					  <?php } ?>
				</ul>
			</div>
	<?php }else{
		echo '<div class="flash">No Items in your wishlist!</div>';
	} ?>
		</div>
</div>