<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_adversiters'), array('class'=>'add')); ?>">< View Merchants</a>
	<h1 class="title">Add Merchant</h1>
</div>
<?php echo $this->Form->create('Adv'); ?>

		<fieldset>
 <?php
	echo $this->Form->input('afflitate_type', array('label'=>'afflitate_type', 'type'=>'select', 'options' => array('CJ' => 'Commission Junction', 'LS' => 'Link Share'
        )));?>
     <?php echo $this->Form->input('adv_id', array('label'=>'Adversiter ID', 'type'=>'text', 'required'));?>
     
    <?php
    echo $this->Form->input('adv_name', array('label'=>'Adversiter Name', 'type'=>'text', 'class'=>'required'));?>
 
	</fieldset>
	
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
