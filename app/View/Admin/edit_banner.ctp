
<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'banners'), array('class'=>'add')); ?>">View All Banners</a>
<<<<<<< HEAD
	<h1 class="title">Active/inactive/edit banners</h1>
=======
	<h1 class="title">Add/Edit Banners</h1>
>>>>>>> 80da00b175635dbe7774711d9f665b465b2eb1ff
</div>
<?php echo $this->Form->create('Banner', array('type'=>'file')); ?>
<?php  echo $this->Form->input('id', array('type'=>'hidden')); ?>
		<fieldset>
 <?php
<<<<<<< HEAD
	echo $this->Form->input('pages', array('label'=>'Select', 'type'=>'select', 'options' => array('index' => 'Index Page','men' => 'Men', 'women' => 'Women'
      ,'footer' => 'Member Banner In bottom','header' => 'Header'  )));?>
=======
	echo $this->Form->input('pages', array('label'=>'Category', 'type'=>'select', 'options' => array('index' => 'Index Page','men' => 'Men', 'women' => 'Women'
        )));?>
>>>>>>> 80da00b175635dbe7774711d9f665b465b2eb1ff
		
 <?php
	echo $this->Form->input('section', array('label'=>'Position', 'type'=>'select', 'options' => array('left' => 'Left', 'right' => 'Right'
        )));?>
    
     
    <?php echo $this->Form->input('heading', array('label'=>'Heading', 'type'=>'text', 'class'=>'required'));?>
	<?php echo $this->Form->input('description', array('label'=>'Description', 'type'=>'textarea', 'class'=>'required'));?>
	<?php echo $this->Form->input('buy_url', array('label'=>'Buy URL', 'type'=>'text', 'class'=>'required'));?>
	
<<<<<<< HEAD
	<div class="profile-image input">
							<?php if($bannerList['image']!=NULL){
								$image='Banners/'.$bannerList['image'];
								}else{
									$image="profile.png";
								}
								echo $this->Html->image($image, array('class'=>'mainimg', 'style'=>'width:100px; border:1px solid #999;')); ?><br/>
							<?php echo $this->Form->file('image',array('label'=>'Banner Image', 'type'=>'text')); ?>
						</div>
=======
	<div class="input">
					<?php echo $this->Form->file('image'); ?>
				</div>
>>>>>>> 80da00b175635dbe7774711d9f665b465b2eb1ff
	
	
	<?php echo $this->Form->input('status', array('label'=>'Active', 'type'=>'checkbox')); ?>
	<?php echo $this->Form->submit('Update', array('class'=>'primary button'));?>
	
	</fieldset>
	<?php echo $this->Form->end(); ?>
</div>
