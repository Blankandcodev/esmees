<?php 
foreach($orderDetail as $order){
	
	
	
}


?>
<div class="users form">
  <fieldset>
        <legend><?php echo __('Please Upload New Looks Image'); ?></legend>
<?php echo $this->Form->create('', array('type'=>'file', 'controller' => 'Users', 'action' => 'upload_lookimage'));  ?>
	
	<div class="module_content">
														<?php echo $this->Form->Hidden('order_id', array('value' => $order['Order']['order_id']));?>
														
												
														
														
														
														<?php echo $this->Form->Hidden('user_id', array('value' => $order['Order']['user_id']));?>
														
															<?php echo $this->Form->Hidden('product_id', array('value' => $order['Order']['product_id']));?>
							
														 <?php
																 echo $this->Form->input('caption_name', array('label'=>'Caption', 'type'=>'text', 'required', 'div' => array(
																	'class' => 'required'
																)));
															?>
															
															<?php echo $this->Form->file('image', array('class'=>'required')); ?>
															
															<?php echo $this->Form->end(__('Upload Image')); ?>
															
															</fieldset>
</div>