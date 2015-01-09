
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Password Recovery'); ?></legend>
    <?php
         echo $this->Form->input('username', array('type'=>'email', 'maxLength'=>'50' ,'label'=>'Username (your email ID)', 'placeholder'=>'email@example.com'));
       
    ?>
	<?php echo $this->Form->submit('Email a new password', array('class'=>'button primary med')); ?>
 
    </fieldset>
<?php echo $this->Form->end(); ?>

</div>