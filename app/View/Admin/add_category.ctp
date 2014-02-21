<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('Category'); ?>
    <fieldset>
        <legend><?php echo __('Add Category'); ?></legend>
    <?php
       echo $this->Form->input('name', array( 'label'=>'Category Name','type' => 'text'));
 ?>
    </fieldset>
<?php echo $this->Form->end(__('Add Category')); ?>

</div>