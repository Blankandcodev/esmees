	<h4 class="alert_info"><?php echo $this->Html->link('View Adversiter List',array('controller' => 'Advs', 'action' => 'index')); ?></h4>
<article class="module width_full">
			<header><h3>Edit Adversiter</h3>
			


			</header>
			<?php
echo $this->Form->create('Adv', array('action' => 'edit'));
    echo $this->Form->input('id', array('type'=>'hidden')); ?>
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
	<?php echo $this->Form->end(__('Update')); ?>
	</div>

</div>