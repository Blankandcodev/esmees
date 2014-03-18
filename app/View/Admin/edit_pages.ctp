<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_pages'), array('class'=>'add')); ?>"> View all Pages</a>
	<h1 class="title">Edit Page</h1>
</div>
<?php echo $this->Form->create('Page');
 echo $this->Form->input('id', array('type'=>'hidden')); ?>
		<fieldset>
 
     
   
    <?php echo $this->Form->input('name', array('label'=>'Name')); ?>
	<?php echo $this->Form->input('description', array('label'=>'Description', 'type'=>'textarea', 'class'=>'required'));?>
	<?php echo $this->Form->end(__('Update')); ?>
	</fieldset>
	
	
	</div>
