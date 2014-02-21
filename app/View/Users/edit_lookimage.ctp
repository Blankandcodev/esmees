
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
																 echo $this->Form->input('caption_name', array('label'=>'Caption Name', 'type'=>'text', 'required', 'div' => array(
																	'class' => 'required'
																)));
															?>
															
															<?php echo $this->Form->file('image', array('class'=>'required')); ?>
															
															<?php echo $this->Form->end(__('Upload Image')); ?>
															
															</fieldset>
</div>