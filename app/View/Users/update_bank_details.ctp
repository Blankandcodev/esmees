<div class="users form">

<?php foreach($userInfo as $user){
	
	$nickname = $user['nickname'];
	$name = $user['name'];
	$mname = $user['middle_name'];
	$email = $user['username'];
	$lname = $user['last_name'];
	$address = $user['address'];
	$address1 = $user['address1'];
	
	$city = $user['city'];
	$state = $user['state'];
	$ss_number = $user['ss_number'];
	$bankname = $user['bankname'];
	$bankaccount_no = $user['bankaccount_no'];
	$bankrouting_no = $user['bankrouting_no'];
	$zip = $user['zip'];
	$zip = $user['zip'];
	}
?>
<?php echo $this->Form->create('bank', array('class'=>'cform')); ?>

 <fieldset>
        <legend><?php echo __('Update Personal Info'); ?></legend>
		<?php echo $this->Form->input('nickname',array('label'=>'User Aka', 'type'=>'text', 'required','value'=> $nickname )); ?>
						<?php echo $this->Form->input('name',array('label'=>'First Name', 'type'=>'text', 'required', 'value'=> $name)); ?>
						<?php echo $this->Form->input('middle_name',array('label'=>' Middle Name', 'type'=>'text','value'=> $mname)); ?>
						<?php echo $this->Form->input('last_name',array('label'=>' Last Name', 'type'=>'text', 'required','value'=> $lname)); ?>
						<?php echo $this->Form->input('username', array('label'=>' Email Address', 'type'=>'text', 'required', 'value'=> $email)); ?>
						<?php echo $this->Form->input('address',array('label'=>'Address Line 1', 'type'=>'text','required', 'value'=> $address )); ?>
						<?php echo $this->Form->input('address1',array('label'=>'Address Line 2', 'type'=>'text', 'value'=> $address1 )); ?>
						
						<?php echo $this->Form->input('city',array('label'=>'City', 'type'=>'text', 'required', 'value'=> $city )); ?>
						<?php echo $this->Form->input('state',array('label'=>'State', 'type'=>'text', 'required', 'value'=> $state )); ?>
						<?php echo $this->Form->input('zip', array('label'=>'Zip Code', 'type'=>'text','value'=> $zip )); ?>
						<?php 	echo $this->Country->select('country', array('label'=>'Selct your Country')); ?>
						</li>
						<?php echo $this->Form->submit('Update', array('class'=>'primary button med')) ?>
 </fieldset>
  
</div>