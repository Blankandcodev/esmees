<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_pages'), array('class'=>'add')); ?>"> View all Pages</a>
	<h1 class="title">Add Page</h1>
</div>
<?php echo $this->Form->create('Page'); ?>

		<fieldset>
 
     
   
    <?php echo $this->Form->input('name', array('label'=>'Name','class'=>'required')); ?>
	<?php echo $this->Form->input('description', array('label'=>'Description', 'type'=>'textarea', 'class'=>'required'));?>
	<?php echo $this->Form->end(__('Submit')); ?>
	</fieldset>
	
	
	</div>
