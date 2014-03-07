
<div class="users form">
<?php echo $this->Form->create('User');  ?>
  <fieldset>
        <legend><?php echo __('Change Password'); ?></legend>


	<div class="module_content">
													
														
												
														
														
														
							
														  <?php
																 echo $this->Form->input('password', array('label'=>'New Password', 'type'=>'password', 'required'));
															?>
															
															  <?php
																 echo $this->Form->input('password_confirmation', array('label'=>'Re-type password', 'type'=>'password', 'required' ));
															?>
															
															
														<?php echo $this->Form->submit('Change Password', array('class'=>'primary button med')) ?>
															
														
															
															</fieldset>
																<?php echo $this->Form->end(); ?>
</div>