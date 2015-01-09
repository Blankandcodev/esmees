
<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'banners'), array('class'=>'add')); ?>">View All Banners</a>
	<h1 class="title">Active/inactive/edit banners</h1>
</div>
<?php echo $this->Form->create('Banner', array('type'=>'file')); ?>
<?php  echo $this->Form->input('id', array('type'=>'hidden')); ?>
		<fieldset>
 <?php
	echo $this->Form->input('pages', array('label'=>'Select', 'type'=>'select', 'options' => array('index' => 'Index Page','men' => 'Men', 'women' => 'Women','banner1' => 'Become a Member banner Men','banner2' => 'Become a Member banner Women','header' => 'Header','footer' => 'Footer '
        )));?>
 <?php
	echo $this->Form->input('section', array('label'=>'Position', 'type'=>'select', 'options' => array('left' => 'Left', 'right' => 'Right'
        )));?>
    
     
    <?php echo $this->Form->input('heading', array('label'=>'Heading', 'type'=>'text'));?>
	<?php echo $this->Form->input('description', array('label'=>'Description', 'type'=>'textarea', 'rows'=>20, 'class'=>'editor full required'));?>
	<?php echo $this->Form->input('buy_url', array('label'=>'Buy URL', 'type'=>'text', 'class'=>'required'));?>
	
	<div class="profile-image input">
							<?php if($bannerList['image']!=NULL){
								$image='Banners/'.$bannerList['image'];
								}else{
									$image="profile.png";
								}
								echo $this->Html->image($image, array('class'=>'mainimg', 'style'=>'width:100px; border:1px solid #999;')); ?><br/>
							<?php echo $this->Form->file('image',array('label'=>'Banner Image', 'type'=>'text')); ?>
						</div>
	
	
	<?php echo $this->Form->input('status', array('label'=>'Active', 'type'=>'checkbox')); ?>
	<?php echo $this->Form->submit('Update', array('class'=>'primary button'));?>
	
	</fieldset>
	<?php echo $this->Form->end(); ?>
</div>
