<div class="users form">
<pre>
<?php echo $this->Form->create('Category');
 ?>
    <fieldset>
        <legend><?php echo __('Add Sub Category'); ?></legend>
<?php
		echo $this->Form->input('parent_id', array('options' => $categoryList, 'label'=>'Select Category Name'));
?>
<?php
       echo $this->Form->input('name', array( 'label'=>'SubCategory Name','type' => 'text'));
 ?>
    </fieldset>
<?php echo $this->Form->end(__('Add Category')); ?>



</div>