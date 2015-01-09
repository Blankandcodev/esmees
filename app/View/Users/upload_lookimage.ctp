<div class="users form">
	<?php echo $this->Form->create('lookupload', array('type'=>'file'));  ?>
		<fieldset>
			<legend><?php echo __('Please Upload New Looks Image'); ?></legend>
			<div class="module_content">
				<?php echo $this->Form->Hidden('order_id', array('value' => $order['Order']['id']));?>
				<?php echo $this->Form->Hidden('user_id', array('value' => $order['Order']['user_id']));?>
				<?php echo $this->Form->Hidden('product_id', array('value' => $order['Order']['product_id']));?>
				<?php echo $this->Form->input('caption_name', array('label'=>'Caption', 'type'=>'text', 'required')); ?>
				<div class="input">
					<?php echo $this->Form->file('image', array('class'=>'required')); ?>
				</div>
				<?php echo $this->Form->input('cover', array('label'=>'Make Cover Picture', 'type'=>'checkbox')); ?>
				<?php echo $this->Form->submit('Upload Image', array('class'=>'primary button med')) ?>
				
			</div>
		</fieldset>
	<?php echo $this->Form->end(); ?>
</div>