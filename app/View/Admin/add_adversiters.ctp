<div class="users form">
<fieldset>
 <legend>Add New Adversiter</legend>
<?php echo $this->Form->create('Adv'); ?>

 <?php
	echo $this->Form->input('afflitate_type', array('label'=>'afflitate_type', 'type'=>'radio', 'options' => array('0' => 'Commission Junction', '1' => 'Link Share'
        )));?>
     <?php echo $this->Form->input('adv_id', array('label'=>'Adversiter ID', 'type'=>'text', 'required', 'div' => array('class' => 'required')));?>
     
    <?php
    echo $this->Form->input('adv_name', array('label'=>'Adversiter Name', 'type'=>'text', 'required', 'div' => array('class' => 'required')));?>
 
	</fieldset>
	
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
