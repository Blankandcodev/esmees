<div class="users form">
<fieldset>
 <legend>Edit  Adversiter</legend>
<?php
echo $this->Form->create('Adv');
    echo $this->Form->input('id', array('type'=>'hidden')); ?>
<div class="module_content">

 <?php
	 echo $this->Form->input('afflitate_type', array('label'=>'afflitate_type', 'type'=>'radio',
            'options' => array('0' => 'Commission Junction', '1' => 'Link Share')
        ));
 ?>
    <?php
      
		 echo $this->Form->input('adv_id', array('label'=>'Adversiter ID', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
      
    ?>      
    <?php
		 echo $this->Form->input('adv_name', array('label'=>'Adversiter Name', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
    ?>
    </fieldset>
	<?php echo $this->Form->end(__('Update')); ?>

</div>