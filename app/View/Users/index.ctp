<div class="page-container">
	<div class="title">
		<h1>My Dashboard</h1>
	</div>
	<div class="colset col2 cf top-part">
	<?php if(isset($loggeduser) && $loggeduser){ ?>
		<div class="left">
			<div class="nav-box">
				<ul class="left-nav">
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'portfolio'),true) ?>">PORTFOLIO</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'profile', $loggeduser['id']),true) ?>">MY PROFILE</a></li>
					
					<li><a href="#">MY OFFER</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followed_user'),true) ?>">FOLLOWED USERS</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'wishlist'),true) ?>">WISHLIST PRODUCT</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'commission'),true) ?>">COMMISSION</a></li>
				</ul>
			</div>
		</div>
		<div class="main">
			<div class="user-profile cf">
				<div class="profile-picture">
				
					<h2 class="sub-title">Profile Picture</h2>
					<div class="picture">
						<?php if($loggeduser['image']!=NULL){
							$image='Users/home/'.$loggeduser['image'];
						}else{
							$image="profile.png";
						}
						echo $this->Html->image($image, array('class'=>'mainimg')); ?>
						<div class="image-action">
							<div class="edit"><img src="img/img_edit.png" /><span><?php echo $this->Html->link('Edit', array('controller'=>'Users', 'action'=>'edit_profile',$loggeduser['id']));?></span></div>
							
						</div>  
					</div>
				</div>
				
				<div class="account-info">
					<?php echo $this->Html->link('Edit', array('controller'=>'Users', 'action'=>'edit_profile',$loggeduser['id']), array('class'=>'right tbtn'));?> 
					<h2 class="sub-title bordered">Account Info</h2>
					<ul class="info-list">
					
						<li>
							<?php echo $this->Html->link('ChangePassword', array('controller'=>'Users', 'action'=>'password',$loggeduser['id']), array('class'=>'right'));?> 
							<span>Email Address :</span> <?php echo  $loggeduser['username']; ?>
						</li>
						<li><span>Name:  </span><?php echo  $loggeduser['name']; ?> </li>
						<li><span>City:  </span><?php echo $loggeduser['city']; ?> </li>
						<li><span>State:  </span><?php echo  $loggeduser['state']; ?></li>
						<li><span>Zip Code: </span> <?php echo  $loggeduser['zip']; ?></li>
						<li><span>Country:  </span><?php echo $loggeduser['country']; ?></li>
					
					</ul>
					
				</div>
				
				<div class="account-pop">
					<div class="pop-box">
						<span>Followers :</span> <span class="num"><?php echo $flowCounts ?></span>
					</div>
					<div class="pop-box">
						<span>Likes :</span> <span class="num"><?php echo $loggeduser['likes'] ?></span>
					</div>
					<div class="pop-box">
						<span>Commission :</span> <span class="num">999</span>
					</div>
				</div>
			</div>
		</div>
		 <?php } ?>
	</div>
		<div class="look-listing">
			<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'looks', $loggeduser['id'])); ?>" class="title-btn right">View All</a>
			<h1 class="sec-title bordered"><?php echo $loggeduser['name']; ?>'s Looks</h1>
	<?php if(!empty($userLooks)){ ?>
			<div class="listing cf">
				<ul class="item-list cf">
					<?php foreach($userLooks as $mlook){?>
						<li>
							<div class="image">
								<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['id']),true) ?>"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a>
							</div>
							<div class="info">
								<p class="i-title"><?php echo $this->Text->truncate($mlook['Look']['caption_name'],20,	array('ellipsis' => '...','exact' => 'false')); ?></p>
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['id']),true) ?>" class="like-btn right small"><?php echo count($mlook['Like']) ?></a>
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'profile', $mlook['Look']['user_id']),true) ?>" class="user-name">
									<?php echo $this->Text->truncate($mlook['User']['name'],20,	array('ellipsis' => '...','exact' => 'false')); ?>
								</a>
							</div>
						</li>
					  <?php } ?>
				</ul>
			</div>
	<?php }else{
		echo '<div class="flash">No looks uploaded yet!</div>';
	} ?>
		</div>
	
		<div class="look-listing">
			<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'wishlist')); ?>" class="title-btn right">View All</a>
			<h1 class="sec-title bordered">My Wishlist</h1>
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