<div class="page-container look-gallery">
	<div class="title">
		<div class="colset col2 cf">
			<div class="left">
				<h1>#TREND<span>Setters</span></h1>
			</div>
			<div class="main">
				
				
				<div class="sorting right">
					<ul class="custdrop">
						<li><span class="ftitle">Sort by</span>
							<ul class="drop">
								<li><?php echo $this->Paginator->sort('caption_name', 'Look Caption'); ?></li>
								<li><?php echo $this->Paginator->sort('likes', 'Popularity'); ?></li>
								<li><?php echo $this->Paginator->sort('User.name', 'User Name'); ?></li>
								<li><?php echo $this->Paginator->sort('User.nickname', 'User Aka'); ?></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="srch_div">
					<?PHP echo $this->Form->Create('Search', array( 'type'=>'get' ) );
					echo $this->Form->input('keyword', array('placeholder'=>'@User or #caption', 'type'=>'text'));
					echo $this->Form->submit('Serach');
					echo $this->Form->end();
					?>
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
				<h3 class="box-title">Sites</h3>
				<ul class="left-nav">
					<?php foreach($AllBrands as $brand){ ?>
						<li>
							<a href="<?php echo $this->Menu->qurl('brand', $brand['Look']['brands']); ?>">
								<?php echo  $brand['Look']['brands']; ?>
							</a>
						</li>
					<?php }; ?>
				</ul>
			</div>
		</div>
		<div class="main">
			<div class="look-listing">
				<?php echo $this->Menu->qmenu(); ?>
				<?php if(!empty($looks)){ ?>
					<div class="listing cf">
						<ul class="item-list cf">
							<?php foreach($looks as $mlook){?>
								<li>
									<div class="image">
										<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['id']),true) ?>"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a>
									</div>
									<div class="info">
										<p class="i-title"><?php echo $this->Text->truncate($mlook['Look']['caption_name'],25,	array('ellipsis' => '','exact' => 'false')); ?></p>
										
										<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $mlook['Look']['Id']),true) ?>" class="like-btn right small"><?php echo $mlook['Look']['likes'] ?></a>
										
										<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'profile', $mlook['Look']['user_id']),true) ?>" class="user-name">
											<?php echo $this->Text->truncate($mlook['User']['nickname'],15,	array('ellipsis' => '','exact' => 'false')); ?>
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
					echo '<div class="flash">Looks not fount!</div>';
				} ?>
			</div>
		</div>
	</div>
</div>