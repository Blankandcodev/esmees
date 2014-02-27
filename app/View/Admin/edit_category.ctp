
<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_category'), array('class'=>'add')); ?>"> View Category</a>
	<h1 class="title">Edit Category</h1>
</div>


<fieldset>

<?php
echo $this->Form->create('Category');
    echo $this->Form->input('id', array('type'=>'hidden')); ?>
<div class="module_content">
    
    <?php
      
		echo $this->Form->input('name', array( 'label'=>'Category Name','type' => 'text'));
      
    ?>
   <?php echo $this->Form->end(__('Update')); ?>
	
	 </fieldset>
	
	</div>

</div>