<div class="users form">
	<?php echo $this->Form->create('lookupload', array('type'=>'file'));  ?>
		<fieldset>
			<legend><?php echo __('Please Upload New Looks Image'); ?></legend>
			<div class="module_content">
				<?php echo $this->Form->Hidden('order_id', array('value' => $order['Order']['id']));?>
				<?php echo $this->Form->Hidden('user_id', array('value' => $order['Order']['user_id']));?>
				<?php echo $this->Form->Hidden('product_id', array('value' => $order['Order']['product_id']));?>
				<?php echo $this->Form->input('caption_name', array('label'=>'Caption', 'type'=>'text', 'required')); ?>
				<?php echo $this->Form->file('image', array('class'=>'required')); ?>
				<?php echo $this->Form->submit('Upload Image'); ?>
			</div>
		</fieldset>
	<?php echo $this->Form->end(); ?>
</div>