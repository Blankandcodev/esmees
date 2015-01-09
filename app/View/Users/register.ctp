<div class="users form">
<?php echo $this->Form->create('User', array('class'=>'cform')); ?>
    <fieldset>
        <legend><?php echo __('User Registration'); ?></legend>
    <?php
        echo $this->Form->input('role', array('value'=>'0', 'type'=>'hidden'));
		echo $this->Form->input('nickname',  array('label'=>'Nick Name','maxLength'=>'50',  'type'=>'text', 'class'=>'required', 'label'=>'Aka'));
        echo $this->Form->input('name',  array('label'=>'First Name','maxLength'=>'50',  'type'=>'text', 'required'));
		echo $this->Form->input('middle_name',  array('label'=>'Middle Name','maxLength'=>'50',  'type'=>'text'));
		echo $this->Form->input('last_name',  array('label'=>'Last Name','maxLength'=>'50',  'type'=>'text', 'required'));
       
        echo $this->Form->input('username',  array('type'=>'email', 'maxLength'=>'250','label'=>'Email Address', 'placeholder'=>'email@example.com', 'class'=>'required email'));
        echo $this->Form->input('password',array('class'=>'required', 'id'=>'pwd'));
        echo $this->Form->input('gender', array('label'=>'Gender', 'type'=>'radio','required', 'options' => array('0' => 'Male', '1' => 'Female'), 'default' => 0));
		echo $this->Form->input('dob',   array('label'=>'Date Of Birth(dd/mm/yyyy)','maxLength'=>'12', 'type'=>'text', 'required'));
		
        echo $this->Form->input('city',   array('label'=>'City','maxLength'=>'100', 'type'=>'text', 'required'));
        
		echo $this->Form->input('state',   array('label'=>'State','maxLength'=>'100', 'type'=>'text', 'required'));
	
		
		echo $this->Country->select('country', array('label'=>'Country', 'maxLength'=>'15', 'type'=>'text'));
		
    ?>
	<?php echo $this->Form->submit('Register', array('class'=>'primary button med')) ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>