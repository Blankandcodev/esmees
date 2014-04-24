<?php $allProducts = $products['products']['product'];
foreach($allProducts as $_product){ ?>
	
	<div class="product"><img width="300" src="<?php echo $_product['image-url'] ?>" /></div>
	<div class="product"><img width="300" src="<?php echo $_product['image-url'] ?>" /></div>
	<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
    <?php
        echo $this->Form->input('name', array('label'=>'Full Name', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
        echo $this->Form->input('gender', array('label'=>'Gender', 'type'=>'radio',
            'options' => array('0' => 'Male', '1' => 'Female')
        ));
        echo $this->Form->input('username', array('type'=>'email', 'label'=>'Username (your email ID)', 'placeholder'=>'email@example.com'));
        echo $this->Form->input('password');
        echo $this->Form->input('address', array('label'=>'Address', 'type'=>'textarea', 'required', 'div' => array(
			'class' => 'required'
		)));
        echo $this->Form->input('state', array('label'=>'State', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
        echo $this->Form->input('city', array('label'=>'City', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
        echo $this->Form->input('zip', array('label'=>'ZIP Code', 'type'=>'text', 'required', 'div' => array(
			'class' => 'required'
		)));
		
		echo $this->Country->select('country', array('label'=>'Selct your Country'));
		
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
	
<?php }; ?>