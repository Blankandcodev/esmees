<div class="page-container">
	<div class="title">
		<h1>My Dashboard</h1>
	</div>
	<div class="colset col2 cf">
		<div class="left">
			<div class="nav-box">
				<ul class="left-nav">
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'portfolio'),true) ?>">PORTFOLIO</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'my_account'),true) ?>">MY PROFILE</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'order_details'),true) ?>">MANAGE LOOKS</a></li>
					
					<li><a href="#">MY OFFER</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followed_user'),true) ?>">FOLLOWED USERS</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'viewall_wishlist'),true) ?>">WISHLIST PRODUCT</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'commission'),true) ?>">COMMISSION</a></li>
				</ul>
			</div>
		</div>
		<div class="main">
			<div class="user-profile cf">
				<div class="profile-picture">
					<h2 class="sub-title">Profile Picture</h2>
					<div class="picture">
						<?php if($user['image']!=NULL){
							$image='Users/home/'.$user['image'];
						}else{
							$image="profile.png";
						}
						echo $this->Html->image($image, array('class'=>'mainimg')); ?>
						<div class="image-action">
							<div class="edit"><img src="img/img_edit.png" /><span><?php echo $this->Html->link('Edit', array('controller'=>'Users', 'action'=>'user_profile',$user['id']));?></span></div>
							<div class="delete"><img src="img/cros.png" /><span><?php echo $this->Html->link('delete', array('controller'=>'Users', 'action'=>'user_profile',$user['id']));?></span></div>
						</div>  
					</div>
				</div>
				
				<div class="account-info">
					<?php echo $this->Html->link('Edit', array('controller'=>'Users', 'action'=>'user_profile',$user['id']), array('class'=>'right tbtn'));?> 
					<h2 class="sub-title bordered">Account Info</h2>
					<ul class="info-list">
						<li>
							<?php echo $this->Html->link('ChangePassword', array('controller'=>'Users', 'action'=>'password',$user['id']), array('class'=>'right'));?> 
							<span>Email Address :</span> <?php echo  $user['username']; ?>
						</li>
						<li><span>Name:  </span><?php echo  $user['name']; ?> </li>
						<li><span>City:  </span><?php echo  $user['city']; ?> </li>
						<li><span>State:  </span><?php echo  $user['state']; ?></li>
						<li><span>Zip Code: </span> <?php echo  $user['zip']; ?></li>
						<li><span>Country:  </span><?php echo  $user['country']; ?></li>
					</ul>
				</div>
				
				<div class="account-pop">
					<div class="pop-box">
						<span>Followers :</span> <span class="num"><?php echo $flowCounts ?></span>
					</div>
					<div class="pop-box">
						<span>Likes :</span> <span class="num"><?php echo $likeCounts ?></span>
					</div>
					<div class="pop-box">
						<span>Commission :</span> <span class="num">999</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php if(!empty($userLooks)){ ?>
		<div class="look-listing">
			<h1 class="sec-title">New <span>Looks</span></h1>
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