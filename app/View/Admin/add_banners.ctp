<div class="title-row">	
	<h1 class="title">Add/Edit Banner</h1>
</div>
<?php echo $this->Form->create('Banner'); ?>
	<fieldset>
		<?php echo $this->Form->input('category', array('label'=>'Category', 'label'=>'Select Page', 'type'=>'select', 'options' => array('0' => 'Homepage', '1' => 'Men', '2' => 'Women')));?>
		<?php echo $this->Form->input('section', array('label'=>'Position', 'label'=>'Select Position', 'type'=>'select', 'options' => array('0' => 'Left', '1' => 'Right' )));?>
		<?php echo $this->Form->input('heading', array('label'=>'Heading', 'type'=>'text', 'class'=>'required'));?>
		<?php echo $this->Form->input('description', array('label'=>'Description', 'type'=>'textarea', 'class'=>'required'));?>
		<?php echo $this->Form->input('buy_url', array('label'=>'Link', 'type'=>'text', 'class'=>'required'));?>
		<div class="input">
			<?php echo $this->Form->file('image',array('label'=>'Upload Image', 'type'=>'text')); ?>
		</div>
		<?php echo $this->Form->input('status', array('label'=>'Enable', 'type'=>'checkbox'));?>
		<?php echo $this->Form->Submit('Submit'); ?>
	</fieldset>
	<?php echo $this->Form->end(); ?>
</div>
