<div class="title-row">
	
	<h1 class="title">Add Banners</h1>
</div>
<?php echo $this->Form->create('Banner'); ?>

		<fieldset>
 <?php
	echo $this->Form->input('category', array('label'=>'Category', 'type'=>'select', 'options' => array('0' => 'Men', '1' => 'Women'
        )));?>
		
 <?php
	echo $this->Form->input('section', array('label'=>'Position', 'type'=>'select', 'options' => array('0' => 'Left', '1' => 'Right'
        )));?>
    
     
    <?php echo $this->Form->input('heading', array('label'=>'Heading', 'type'=>'text', 'class'=>'required'));?>
	<?php echo $this->Form->input('description', array('label'=>'Description', 'type'=>'textarea', 'class'=>'required'));?>
	<?php echo $this->Form->input('buy_url', array('label'=>'Buy URL', 'type'=>'text', 'class'=>'required'));?>
	<?php echo $this->Form->file('image',array('label'=>'Upload Image', 'type'=>'text')); ?>
	<?php echo $this->Form->Submit('Submit'); ?>
	
	</fieldset>
	<?php echo $this->Form->end(); ?>
	
	
	</div>
