<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_adversiters'), array('class'=>'add')); ?>"> View Merchants</a>
	<h1 class="title">View All Commission</h1>
</div>




<?php echo $this->Form->create('Linkshares'); ?>

		<fieldset>
 <?php
	echo $this->Form->input('afflitate_type', array('label'=>'Afflitate_type', 'type'=>'select', 'options' => array('CJ' => 'Commission Junction', 'LS' => 'Link Share'
        )));?>
    
	<?php echo $this->Form->input('member_id', array('type'=>'hidden' )); ?>
	<?php echo $this->Form->input('merchant_id', array('type'=>'hidden')); ?>
	<?php echo $this->Form->input('merchant_name', array('type'=>'hidden')); ?>
	<?php echo $this->Form->input('order_id', array('type'=>'hidden')); ?>
	<?php echo $this->Form->input('transaction_date', array('type'=>'hidden' )); ?>
	<?php echo $this->Form->input('transaction_ time', array('type'=>'hidden')); ?>
	<?php echo $this->Form->input('sku_number', array('type'=>'hidden' )); ?>
	<?php echo $this->Form->input('sales', array('type'=>'hidden' )); ?>
	<?php echo $this->Form->input('quantity', array('type'=>'hidden' )); ?>
	<?php echo $this->Form->input('commissions', array('type'=>'hidden')); ?>
	<?php echo $this->Form->input('process_ date', array('type'=>'hidden' )); ?>
	<?php echo $this->Form->input('process_time', array('type'=>'hidden')); ?>
	
     
 
	<?php echo $this->Form->end(__('Submit')); ?>
	</fieldset>

	</div>
