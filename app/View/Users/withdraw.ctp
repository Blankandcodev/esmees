
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
		echo $this->Form->input('amount',  array('label'=>'Nick Name','maxLength'=>'50',  'type'=>'text', 'class'=>'required', 'label'=>'withdraw Amount'));
		
		
		
	
		
    ?>

	<?php echo $this->Form->submit('Widthdraw Request', array('class'=>'primary button med')) ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
