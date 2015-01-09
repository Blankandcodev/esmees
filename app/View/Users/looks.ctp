<div class="page-container">
	<div class="title">
		<a class="back-link" href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'profile', $user['id']),true) ?>"><img class="left" src="<?php echo $this->webroot; ?>img/img17.png" /> &nbsp;Back</a>
		<h1><?php echo $user['nickname']; ?>'s Looks</h1>
	</div>
	<?php if(!empty($looks)){ ?>
		<div class="look-listing">
			<div class="listing cf">
				<ul class="item-list cf">
					<?php foreach($looks as $mlook){?>
						<li>
							<div class="image">
								<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['id']),true) ?>"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a>
							</div>
							<div class="info">
								<p class="i-title"><?php echo $this->Text->truncate($mlook['Look']['caption_name'],20,	array('ellipsis' => '...','exact' => 'false')); ?></p>
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['Id']),true) ?>" class="like-btn right small"><?php echo $mlook['Look']['likes'] ?></a>
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $mlook['Look']['user_id']),true) ?>" class="user-name">
									<?php echo $this->Text->truncate($mlook['User']['nickname'],50,	array('ellipsis' => '...','exact' => 'false')); ?>
								</a>
							</div>
						</li>
					  <?php } ?>
				</ul>
			</div>
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
		echo '<div class="flash">Looks not uploaded yet!</div>';
	} ?>
</div>