<div class="page-container look-gallery">
	<div class="title">
		<div class="colset col2 cf">
			<div class="left">
				<h1>#TREND<span>Setters</span></h1>
			</div>
			<div class="main">
				<div class="srch_div">
					<?PHP echo $this->Form->Create('Search', array( 'url' => array( 'controller'=>'Products', 'action'=>'serach' ), 'type'=>'get' ) );
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
					<?php 
					echo $this->Menu->menu($categories,'down'); 
					foreach($categories as $category){ ?>
						<li>
							<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'categories',$category['Category']['id'])) ?>">
								<?php echo  $category['Category']['name']; ?>
							</a>
                       </li>
					<?php }; ?>
				</ul>
			</div>
			<div class="nav-box">
				<h3 class="box-title">Brands</h3>
				<ul class="left-nav">
					<?php foreach($AllBrands as $brand){ ?>
						<li>
							<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'brands',$brand['Product']['mnf_name'])) ?>">
								<?php echo  $brand['Product']['mnf_name']; ?>
							</a>
						</li>
					<?php }; ?>
				</ul>
			</div>
		</div>
		<div class="main">
			<div class="look-listing">
				<?php if(!empty($looks)){ ?>
					<div class="listing cf">
						<ul class="item-list cf">
							<?php foreach($looks as $mlook){?>
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
		</div>
	</div>
</div>