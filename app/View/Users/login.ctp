<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('User Login'); ?></legend>
    <?php
         echo $this->Form->input('username', array('type'=>'email', 'maxLength'=>'50' ,'label'=>'Username (your email ID)', 'placeholder'=>'email@example.com'));
        echo $this->Form->input('password',array('maxLength'=>'20'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>