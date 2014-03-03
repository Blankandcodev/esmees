<div class="page-container user-profile">
	<div class="colset col2 cf top-part">
		<div class="left">
			<div class="profile-picture">
				<?php if($user['image']!=NULL){
					$image='Users/home/'.$user['image'];
				}else{
					$image="profile.png";
				}
				echo $this->Html->image($image, array('class'=>'mainimg')); ?>
			</div>
		</div>
		<div class="main">
			<div class="account-info">
				<p class="info cf"><span>Username:</span><?php echo $user['name']; ?></p>
				<p class="info cf"><span>Follower:</span><?php echo count($followers); ?></p>
				<p class="info cf"><span>Like:</span><?php echo $user['likes']; ?></p>
				<?php if(isset($loggeduser) && $user['id'] == $loggeduser['id']){}else{
					if(!empty($isfollowed) && $isfollowed['Follower']['id']){ ?>
						<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'unfollow', $isfollowed['Follower']['id'])) ?>" class="button primary">Unfollow me</a>
					<?php }else{ ?>
						<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'follow', $user['id'])) ?>" class="button primary">Follow me</a>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
		<div class="look-listing">
			<h1 class="sec-title"><?php echo $user['name']; ?>'s Looks</h1>
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
			<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $user['id'])); ?>" class="title-btn right">View All</a>
			<h1 class="sec-title bordered">People who follow me...</h1>
	<?php if(!empty($followers)){ ?>
			<div class="listing cf">
				<ul class="users-list cf">
					<?php foreach($followers as $follower){
						$follower = $follower['followedby'];
						?>
						<li>
							<div class="image">
								<?php if($follower['image']!=NULL){
									$image='Users/home/'.$follower['image'];
								}else{
									$image="profile.png";
								}
								$image = $this->Html->image($image, array('class'=>'mainimg')); ?>
								<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'profile', $follower['id']),true) ?>"><?php echo $image; ?></a>
							</div>
							<div class="info">
								<a href="" class="like-btn right small"><?php echo  $follower['likes'] ?></a>
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'profile', $follower['id']),true) ?>" class="user-name">
									<?php echo $this->Text->truncate($follower['name'],20,	array('ellipsis' => '...','exact' => 'false')); ?>
								</a>
							</div>
						</li>
					  <?php } ?>
				</ul>
			</div>
	<?php }else{
		echo '<div class="flash">No Followers yet!</div>';
	} ?>
		</div>
</div>