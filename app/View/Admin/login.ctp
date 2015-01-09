<div class="login">
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend>Login to Admin Panel</legend>
			<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->submit('Login');
			?>
		</fieldset>
	<?php echo $this->Form->end(); ?>
</div>