
<div class="users form">
  <fieldset>
        <legend><?php echo __('Please Upload Looks Image'); ?></legend>
<?php echo $this->Form->create('Look', array('type'=>'file'));  ?>
	
	<div class="module_content">
														
		<?php echo $this->Form->Hidden('order_id');?>
														
		<?php echo $this->Form->Hidden('user_id');?>
		<?php echo $this->Form->Hidden('product_id');?>
		<?php echo $this->Form->Hidden('image');?>
		
		<?php
		
		
		
		 echo $this->Form->input('caption_name', array('label'=>'Caption', 'type'=>'text', 'required' ));?>
															
		<?php echo $this->Form->file('image', array('label'=>'Select', 'required' )); ?>
		
		<?php echo $this->Form->submit('Upload Image', array('class'=>'primary button med')) ?>
		</fieldset>
		<?php echo $this->Form->end(); ?>
</div>