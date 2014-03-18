<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_adversiters'), array('class'=>'add')); ?>"> View Page</a>
	<h1 class="title">Add Page</h1>
</div>
<?php echo $this->Form->create('Page'); ?>

		<fieldset>
 
     
   
    <?php echo $this->Form->input('page_id', array('options' => $pageList, 'label'=>'Select Page Name')); ?>
	<?php echo $this->Form->input('description', array('label'=>'Description', 'type'=>'textarea', 'class'=>'required'));?>
	<?php echo $this->Form->end(__('Submit')); ?>
	</fieldset>
	
	
	</div>
