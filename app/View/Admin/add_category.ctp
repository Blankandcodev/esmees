<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_category'), array('class'=>'add')); ?>"> View Category</a>
	<h1 class="title">Add  Category</h1>
</div>
<div class="users form">
<?php echo $this->Form->create('Category'); ?>
    <fieldset>
		<?php echo $this->Form->input('parent_id', array('options' => $categoryList, 'label'=>'Select Category Name')); ?>
		<?php echo $this->Form->input('name', array( 'label'=>'SubCategory Name','type' => 'text')); ?>
		<?php echo $this->Form->submit('Save Category'); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>