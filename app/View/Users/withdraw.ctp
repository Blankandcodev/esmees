
<div class="users form">
<?php echo $this->Form->create('fetch_request', array('class'=>'cform')); ?>
    <fieldset>
        <legend><?php echo __('Widthdraw Request'); ?></legend>
		
		
    <?php
		
		 $totalC =$commissionList['Commission']['total_commission_earned'];
		 $totalV =$commissionList['Commission']['total_Amount_vested'];
		 $nickname =$commissionList['User']['nickname'];
		 $name =$commissionList['User']['name'];
		 $middle_name =$commissionList['User']['middle_name'];
		 $last_name =$commissionList['User']['last_name'];
		 $gender =$commissionList['User']['gender'];
		 $username =$commissionList['User']['username'];
		 $address1 =$commissionList['User']['address'];
		 $address2 =$commissionList['User']['address1'];
		 $ss_number =$commissionList['User']['ss_number'];
		 $bankname =$commissionList['User']['bankname'];
		 $bankaccount_no =$commissionList['User']['bankaccount_no'];
		 $bankrouting_no =$commissionList['User']['bankrouting_no'];
		 $state =$commissionList['User']['state'];
		 $city =$commissionList['User']['city'];
		 $zip =$commissionList['User']['zip'];
		 $country =$commissionList['User']['country'];
		 
		
		
        echo $this->Form->input('role', array('value'=>'0', 'type'=>'hidden'));
		echo $this->Form->input('totalC',  array('label'=>'Nick Name','maxLength'=>'50',  'type'=>'text', 'class'=>'required', 'label'=>'Total Commission Earned','value'=> $totalC));
		echo $this->Form->input('totalV',  array('label'=>'Nick Name','maxLength'=>'50',  'type'=>'text', 'class'=>'required', 'label'=>'Total Amount Vested','value'=>$totalV));
		echo $this->Form->input('amount',  array('label'=>'Nick Name','maxLength'=>'50',  'type'=>'text', 'class'=>'required', 'label'=>'Request Amount'));
		echo $this->Form->input('nickname',  array('label'=>'Nick Name','maxLength'=>'50',  'type'=>'text', 'class'=>'required', 'label'=>'Aka','value'=> $nickname));
        echo $this->Form->input('name',  array('label'=>'First Name','maxLength'=>'50',  'type'=>'text', 'required','value'=>$name));
		echo $this->Form->input('middle_name',  array('label'=>'Middle Name','maxLength'=>'50',  'type'=>'text', 'required','value'=>$middle_name));
		echo $this->Form->input('last_name',  array('label'=>'Last Name','maxLength'=>'50',  'type'=>'text', 'required','value'=>$last_name));
        echo $this->Form->input('gender', array('label'=>'Gender', 'type'=>'radio', 'options' => array('0' => 'Male', '1' => 'Female') ));
        echo $this->Form->input('username',  array('type'=>'email', 'maxLength'=>'250','label'=>'Email Address', 'placeholder'=>'email@example.com', 'class'=>'required email','value'=>$username));
       
        echo $this->Form->input('address', array('label'=>'Address Line 1', 'maxLength'=>'250', 'type'=>'textarea', 'class'=>'required','value'=>$address1));
		 echo $this->Form->input('state', array('label'=>'State','maxLength'=>'200', 'type'=>'text', 'required','value'=>$state));
		
        echo $this->Form->input('city',   array('label'=>'City','maxLength'=>'100', 'type'=>'text', 'required','value'=>$city));
        echo $this->Form->input('zip',  array('label'=>'ZIP Code', 'maxLength'=>'15', 'type'=>'text', 'required','value'=>$zip));
		
	
		
		echo $this->Country->select('country', array('label'=>'Country', 'maxLength'=>'15', 'type'=>'text','value'=>$country));
        echo $this->Form->input('ss_number', array('label'=>'Social Security Number','maxLength'=>'15', 'type'=>'text','value'=>$ss_number));
		
		 echo $this->Form->input('bankname', array('label'=>'Bank Name','maxLength'=>'200', 'type'=>'text','value'=>$bankname));
		
		 echo $this->Form->input('bankaccount_no', array('label'=>'Bank Account Number','maxLength'=>'200', 'type'=>'text','value'=>$bankaccount_no));
		
		 echo $this->Form->input('bankrouting_no', array('label'=>'Bank Routing Number','maxLength'=>'200', 'type'=>'text','value'=>$bankrouting_no));
		
		
	
		
    ?>

	<?php echo $this->Form->submit('Widthdraw Request', array('class'=>'primary button med')) ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
