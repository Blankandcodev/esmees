<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('User Login'); ?></legend>
    <?php
         echo $this->Form->input('username', array('type'=>'email', 'maxLength'=>'50' ,'label'=>'Username (your email ID)', 'placeholder'=>'email@example.com'));
        echo $this->Form->input('password',array('maxLength'=>'20', 'placeholder'=>'Password'));
    ?>
	<?php echo $this->Form->submit('Login', array('class'=>'button primary med')); ?>
	<p style="margin:5px 0 25px"><?php	echo $this->Html->link('Forgot Password?', array('controller'=>'Users', 'action'=>'password_recovery'));?></p>
	<h2>Dont have an account yet?</h2>
	<?php echo $this->Html->link('Register Now', array('controller'=>'Users', 'action'=>'register'), array('class'=>'button primary med')); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>

</div>