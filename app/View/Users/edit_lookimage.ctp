

<div class="users form">
	<?php echo $this->Form->create('Look', array('type'=>'file'));  ?>
		<fieldset>
			<legend><?php echo __('Edit Looks Image'); ?></legend>
			<div class="module_content">
				
				<?php echo $this->Form->input('caption_name', array('label'=>'Caption', 'type'=>'text', 'required')); ?>
				
				
				<div class="profile-image input">
							<?php if($userLook['image']!=NULL){
								$image='Looks/home/'.$userLook['image'];
								}else{
									
									$image="profile.png";
								}
						echo $this->Html->image($image, array('class'=>'mainimg', 'style'=>'width:100px; border:1px solid #999;')); ?><br/>
							<?php echo $this->Form->file('image',array('label'=>'Profile Image', 'type'=>'text')); ?>
						</div>
				<?php echo $this->Form->input('cover', array('label'=>'Make Cover Picture', 'type'=>'checkbox')); ?>
				
				<?php echo $this->Form->submit('Upload Image', array('class'=>'primary button med')) ?>
				
			</div>
		</fieldset>
	<?php echo $this->Form->end(); ?>
</div>