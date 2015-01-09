<?php echo $this->Html->link('View Adversiter List',array('controller' => 'Advs', 'action' => 'index')); ?>

<article class="module width_full">
			<header><h3>Add Adversiter</h3></header>
<?php echo $this->Form->create('Adv'); ?>
<div class="module_content">
 <fieldset>
 <?php
	 echo $this->Form->input('afflitate_type', array('label'=>'afflitate_type', 'type'=>'radio',
            'options' => array('0' => 'Commission Junction', '1' => 'Link Share')
        ));
 ?>
 </fieldset>
    <fieldset>
        
    <?php
      
		 echo $this->Form->input('adv_id', array('label'=>'Adversiter ID', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
      
    ?>
    </fieldset>
	
	<fieldset>
        
    <?php
      
		 echo $this->Form->input('adv_name', array('label'=>'Adversiter Name', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
      
    ?>
    </fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>

</div>