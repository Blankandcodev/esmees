<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'fetch_commission'), array('class'=>'add')); ?>"> View Commission</a>
	<h1 class="title">Generate Commission</h1>
</div>
<?php echo $this->Form->create(''); ?>

		<fieldset>
 <?php
	echo $this->Form->input('afflitate_type', array('label'=>'Afflitate_type', 'type'=>'select', 'options' => array('CJ' => 'Commission Junction', 'LS' => 'Link Share'
        )));?>
     <?php echo $this->Form->input('adv_id', array('label'=>'Start Date', 'type'=>'text', 'required'));?>
     
    <?php
    echo $this->Form->input('adv_name', array('label'=>'End Date', 'type'=>'text', 'class'=>'required'));?>
	<?php echo $this->Form->end(__('Generate')); ?>
	
	</fieldset>
	
	
	</div>
