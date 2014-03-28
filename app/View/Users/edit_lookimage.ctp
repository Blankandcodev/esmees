

<div class="users form">
	<?php echo $this->Form->create('Look', array('type'=>'file'));  ?>
		<fieldset>
			<legend><?php echo __('Edit Looks Image'); ?></legend>
			<div class="module_content">
				
				<?php echo $this->Form->input('caption_name', array('label'=>'Caption', 'type'=>'text', 'required')); ?>
				<div class="input">
					<?php echo $this->Form->file('image', array('class'=>'required')); ?>
				</div>
				
				<?php echo $this->Form->submit('Upload Image', array('class'=>'primary button med')) ?>
				
			</div>
		</fieldset>
	<?php echo $this->Form->end(); ?>
</div>