<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_adversiters'), array('class'=>'add')); ?>"> View Banners</a>
	<h1 class="title">User Details</h1>
</div>
<?php echo $this->Form->create('user_details'); ?>

		<fieldset>
 <?php
	echo $this->Form->input('category', array('label'=>'Category', 'type'=>'select', 'options' => array('Men' => 'Men', 'women' => 'Women'
        )));?>
		
 <?php
	echo $this->Form->input('section', array('label'=>'Position', 'type'=>'select', 'options' => array('left' => 'Left', 'Right' => 'Right'
        )));?>
    
     
    <?php echo $this->Form->input('heading', array('label'=>'Heading', 'type'=>'text', 'class'=>'required'));?>
	<?php echo $this->Form->input('description', array('label'=>'Description', 'type'=>'textarea', 'class'=>'required'));?>
	<?php echo $this->Form->input('buy_url', array('label'=>'Buy URL', 'type'=>'text', 'class'=>'required'));?>
	
	<?php echo $this->Form->Submit('Submit'); ?>
	
	</fieldset>
	<?php echo $this->Form->end(); ?>
	
	
	</div>
