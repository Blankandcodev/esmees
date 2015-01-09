<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('products'); ?>
    <fieldset>
        <legend><?php echo __('Add Product'); ?></legend>
    <?php
		echo $this->Country->select('Category', array('label'=>'Selct Product Category'));
        echo $this->Form->input('name', array('label'=>'Name', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
       echo $this->Form->input('description', array('label'=>'description', 'type'=>'textarea', 'required', 'div' => array(
			'class' => 'required'
		)));
		echo $this->Form->input('short_descrition', array('label'=>'Short descrition', 'type'=>'textarea', 'required', 'div' => array(
			'class' => 'required'
		)));
        echo $this->Form->input('image_url', array('label'=>'image url', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
        echo $this->Form->input('price', array('label'=>'price', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
		echo $this->Form->input('sale_price', array('label'=>'sale price', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
		 echo $this->Form->input('retail_price', array('label'=>'retail price', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
		echo $this->Form->input('currency', array('label'=>'currency', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
		echo $this->Form->input('buy_url', array('label'=>'buy url', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
       
		
		
		
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>