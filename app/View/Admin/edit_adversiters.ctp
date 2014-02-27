<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_adversiters'), array('class'=>'add')); ?>"> View Merchants</a>
	<h1 class="title">Edit Merchant</h1>
</div>

<?php echo $this->Form->create('Adv'); 
 echo $this->Form->input('id', array('type'=>'hidden')); ?>


		<fieldset>
 <?php
	echo $this->Form->input('afflitate_type', array('label'=>'Afflitate_type', 'type'=>'select', 'options' => array('CJ' => 'Commission Junction', 'LS' => 'Link Share'
        )));?>
     <?php echo $this->Form->input('adv_id', array('label'=>'Merchant ID', 'type'=>'text', 'required'));?>
     
    <?php
    echo $this->Form->input('adv_name', array('label'=>'Merchant Name', 'type'=>'text', 'class'=>'required'));?>
 <?php echo $this->Form->end(__('Update')); ?>
	</fieldset>
	
	
	</div>

<?php
