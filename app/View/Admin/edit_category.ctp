<div class="users form">
<fieldset>
 <legend>Edit Category</legend>
<?php
echo $this->Form->create('Category');
    echo $this->Form->input('id', array('type'=>'hidden')); ?>
<div class="module_content">
    
    <?php
      
		echo $this->Form->input('name', array( 'label'=>'Category Name','type' => 'text'));
      
    ?>
   
	
	 </fieldset>
	
	</div>
<?php echo $this->Form->end(__('Update')); ?>
</div>