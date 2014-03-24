<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_adversiters'), array('class'=>'add')); ?>"> View Merchants</a>
	<h1 class="title">Add Merchant</h1>
</div>
<?php echo $this->Form->create('Adv'); ?>

		<fieldset>
 <?php
	echo $this->Form->input('afflitate_type', array('label'=>'Afflitate type', 'type'=>'select', 'options' => array('CJ' => 'Commission Junction', 'LS' => 'Link Share'
        )));?>
     <?php echo $this->Form->input('adv_id', array('label'=>'Merchant ID', 'type'=>'text', 'required'));?>
     
    <?php
    echo $this->Form->input('adv_name', array('label'=>'Merchant Name', 'type'=>'text', 'class'=>'required'));?>
	
	<?php
    echo $this->Form->input('vsetry_peroid', array('label'=>'Vesting Peroid', 'type'=>'text'));?>
	
	<?php
    echo $this->Form->input('url', array('label'=>'Merchant website URL', 'type'=>'text'));?>
	
	<?php echo $this->Form->submit('Save', array('class'=>'primary button'));?>
	</fieldset>
	<?php echo $this->Form->end(); ?>
	
	</div>
