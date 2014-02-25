
<div class="users form">
  <fieldset>
        <legend><?php echo __('Change Password'); ?></legend>
<?php echo $this->Form->create('User');  ?>

	<div class="module_content">
													
														
												
														
														
														
							
														  <?php
																 echo $this->Form->input('password', array('label'=>'New Password', 'type'=>'password', 'required', 'div' => array(
																	'class' => 'required'
																)));
															?>
															
															  <?php
																 echo $this->Form->input('password_confirmation', array('label'=>'Re-type password', 'type'=>'password', 'required', 'div' => array(
																	'class' => 'required'
																)));
															?>
															
															
														
															
															<?php echo $this->Form->end(__('Save')); ?>
															
															</fieldset>
</div>