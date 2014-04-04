<div class="title-row">
	
	<h1 class="title">Add Banners</h1>
</div>
<?php echo $this->Form->create('Banner', array('type'=>'file')); ?>

		<fieldset>
 <?php
	echo $this->Form->input('pages', array('label'=>'Category', 'type'=>'select', 'options' => array('index' => 'Index Page','men' => 'Men', 'women' => 'Women'
        )));?>
		
 <?php
	echo $this->Form->input('section', array('label'=>'Position', 'type'=>'select', 'options' => array('left' => 'Left', 'right' => 'Right'
        )));?>
    
     
    <?php echo $this->Form->input('heading', array('label'=>'Heading', 'type'=>'text', 'class'=>'required'));?>
	<?php echo $this->Form->input('description', array('label'=>'Description', 'type'=>'textarea', 'class'=>'required'));?>
	<?php echo $this->Form->input('buy_url', array('label'=>'Buy URL', 'type'=>'text', 'class'=>'required'));?>
	<div class="input">
					<?php echo $this->Form->file('image', array('class'=>'required')); ?>
	</div>
	<?php echo $this->Form->Submit('Submit'); ?>
	
	</fieldset>
	<?php echo $this->Form->end(); ?>
	
	
	</div>
