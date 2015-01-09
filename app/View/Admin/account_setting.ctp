<div class="title-row">
	
	<h1 class="title">Account Setting</h1>
</div>
<div class="users form">
<?php
		$username=$user['username'];
		$password=$user['password'];
		
?>
<?php echo $this->Form->create('User'); ?>

		<fieldset>

	
	
     <?php echo $this->Form->input('username1', array('label'=>'User Name(Email Address)', 'value'=>$username, 'type'=>'email' ));?>
     
    <?php echo $this->Form->input('password1', array('label'=>'Password', 'type'=>'password'));?>
	
	
	

	
	
	
	<?php echo $this->Form->submit('Save', array('class'=>'primary button'));?>
	</fieldset>
	<?php echo $this->Form->end(); ?>
</div>