<header><h3>Login to Admin Panel</h3></header>
<?php echo $this->Form->create('User'); ?>
<div class="module_content">
	<div class="users form">
		<fieldset>
			<legend><?php echo __('Please enter your username and password'); ?></legend>
		<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
		?>
		</fieldset>
	</div>
</div>
<footer>
	<div class="submit_link">
		<input type="submit" class="alt_btn" value="Login">
	</div>
</footer>
<?php echo $this->Form->end(); ?>
			