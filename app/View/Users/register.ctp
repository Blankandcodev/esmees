
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('User Registration'); ?></legend>
    <?php
        echo $this->Form->input('role', array('value'=>'0', 'type'=>'hidden'));
		 echo $this->Form->input('nickname',  array('label'=>'Nick Name','maxLength'=>'50',  'type'=>'text', 'required'));
        echo $this->Form->input('name',  array('label'=>'First Name','maxLength'=>'50',  'type'=>'text', 'required'));
		 echo $this->Form->input('middle_name',  array('label'=>'Middle Name','maxLength'=>'50',  'type'=>'text', 'required'));
		 echo $this->Form->input('last_name',  array('label'=>'Last Name','maxLength'=>'50',  'type'=>'text', 'required'));
        echo $this->Form->input('gender', array('label'=>'Gender', 'type'=>'radio', 'options' => array('0' => 'Male', '1' => 'Female') ));
        echo $this->Form->input('username',  array('type'=>'email', 'maxLength'=>'100','label'=>'Email Address', 'placeholder'=>'email@example.com'));
        echo $this->Form->input('password',array('maxLength'=>'20'));
        echo $this->Form->input('address', array('label'=>'Address', 'maxLength'=>'250', 'type'=>'textarea', 'required'));
        echo $this->Form->input('ss_number', array('label'=>'Social Security Number','maxLength'=>'15', 'type'=>'text', 'required'));
		
		 echo $this->Form->input('bankname', array('label'=>'Bank Name','maxLength'=>'200', 'type'=>'text', 'required'));
		
		 echo $this->Form->input('bankaccount_no', array('label'=>'Bank Account Number','maxLength'=>'200', 'type'=>'text', 'required'));
		
		 echo $this->Form->input('bankrouting_no', array('label'=>'Bank Routing Number','maxLength'=>'200', 'type'=>'text', 'required'));
		
		 echo $this->Form->input('state', array('label'=>'State','maxLength'=>'200', 'type'=>'text', 'required'));
		
        echo $this->Form->input('city',   array('label'=>'City','maxLength'=>'100', 'type'=>'text', 'required'));
        echo $this->Form->input('zip',  array('label'=>'ZIP Code', 'maxLength'=>'15', 'type'=>'text', 'required'));
		
	
		
		echo $this->Country->select('country', array('label'=>'Country', 'maxLength'=>'15', 'type'=>'text'));
		
    ?>
	<?php echo $this->Form->submit('Regster', array('class'=>'primary button med')) ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>