<div class="page-container user-profile">	
	<div class="title">
		<a class="back-link" href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img class="left" src="<?php echo $this->webroot; ?>img/img17.png" /> &nbsp;Back</a>
		<h1>People you following</h1>
	</div>
	<?php if(!empty($followed)){ ?>
			<div class="listing cf">
				<ul class="users-list cf">
					<?php foreach($followed as $follower){
						$follower = $follower['followed'];
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
		echo '<div class="flash">No Followers yet!</div>';
	} ?>
		</div>
</div>