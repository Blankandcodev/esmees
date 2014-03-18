
<div class="users form">
<?php echo $this->Form->create('User');  ?>
  <fieldset>
        <legend><?php echo __('Send Verification Code'); ?></legend>


	<div class="module_content">
	  <?php
		 echo $this->Form->input('username', array('label'=>'Email Address', 'type'=>'text', 'required'));?>
															
	   
	  <?php echo $this->Form->submit('Submit', array('class'=>'primary button med')) ?>
	</fieldset>
	<?php echo $this->Form->end(); ?>
</div>
