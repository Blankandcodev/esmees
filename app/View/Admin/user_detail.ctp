<?php
	$vesting_amount=0;
	if (!empty($vestedCommission))
					{
	
		 foreach ($vestedCommission as $key => $val){
		
		  $vesting_amount =$val['total'];
		  $total_vested= $this->Number->format($val['total'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
	}}
	
	if (!empty($totalCommission))
					{
	 foreach ($totalCommission as $key => $val){
		  $total_commission= $this->Number->format($val['total'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
	}
	}
	if (!empty($paidCommission))
	{
	 foreach ($paidCommission as $paid){
		
		  $paid_commission =$paid['total_paid'];
		  $aval_commission= $this->Number->format($paid['total_paid'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));

	}
	}
	
	
	
		$bal_comm = $vesting_amount - $paid_commission;
		
		
		$bal_commission=$this->Number->format($bal_comm, array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));

	
	
?>


	


<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'widthdraw_request'), array('class'=>'add')); ?>"> View WidthDraw Request </a>
	<h1 class="title">WidthDraw Commission</h1>
</div>
	
	
	<table width="100%">
	
	<tr>
			<td>
				<div>
	<?php
			$amount = (!empty($widthdraw['widthdraw_request_amount'])) ? $widthdraw['widthdraw_request_amount'] : '';
			
			
	?>

	<?php echo $this->Form->create('fetch_requset'); ?>
	<?php echo $this->Form->input('vamount', array('label'=>'Available Vested Amount:($)', 'type'=>'text','value'=>$bal_comm, 'class'=>'required', 'width'=>'100', 'readonly'));?>
	
	<?php echo $this->Form->input('amount', array('label'=>'WidthDraw Request Amount($)', 'type'=>'number','value'=>$amount, 'class'=>'required',),array('width'=>'100'));?>
	

	
	<?php echo $this->Form->Submit('WidthDraw Commission',array('class'=>'button primary left')); ?>
	
	
	<?php echo $this->Form->end(); ?>
  
	</div>
	
			</td>
			<td >
				<div class="account-info">
					<?php if(isset($user) && $user){ ?>
					
					<h2 class="sub-title bordered">Commission  Info</h2>
					<ul class="info-list">
					
						<li><span>Total Commission Earned:  </span><?php echo  $total_commission; ?> </li>
						<li><span>Total Vested Amount:  </span><?php echo $total_vested; ?> </li>
						<li><span>Available Vested Amount:  </span><?php 
						if(!empty($bal_commission))
							echo $bal_commission; 
						else
						{
							echo "<span style='color:red'>No Available</span>";
						}
						
						?></li>
						
					
					</ul>
					
					<h2 class="sub-title bordered">Account Info</h2>
				
					<ul class="info-list">
					
						<li><span>First Name:  </span><?php echo  $user['name']; ?> </li>
						<li><span>Middle Name:  </span><?php echo $user['middle_name']; ?> </li>
						<li><span>Last Name:  </span><?php echo  $user['last_name']; ?></li>
						<li><span>Date of Birth: </span> <?php echo  $user['dob']; ?></li>
						<li><span>Address Line 1:  </span><?php echo $user['address']; ?></li>
						<li><span>Address Line 2:  </span><?php echo  $user['address1']; ?> </li>
						<li><span>City:  </span><?php echo $user['city']; ?> </li>
						<li><span>State:  </span><?php echo  $user['state']; ?></li>
						<li><span>Zip Code: </span> <?php echo  $user['zip']; ?></li>
						<li><span>Country:  </span><?php echo $user['country']; ?></li>
					
					</ul>
					
					<h2 class="sub-title bordered">Bank Info </h2>
					<ul class="info-list">
					
						<li><span>Bank Name:  </span><?php echo  $user['bankname']; ?> </li>
						<li><span>Bank Account Number:  </span><?php echo $user['bankaccount_no']; ?> </li>
						<li><span>Social Security Number:  </span><?php echo  $user['ss_number']; ?></li>
						<li><span>Bank Routing Number: </span> <?php echo  $user['bankrouting_no']; ?></li>
						
					
					</ul>
					
					<?php } ?>
				</div>
			</td>
	</tr>
	
	</table>
	<div>
	
	
<table class="dtable" cellspacing="0"> 
	<thead> 
		<tr> 
			 
			<th>
				
				Trans ID
			</th> 
			<th>
					Date
			
			</th> 
				
			<th>
				Amount
			</th>
			<th>	
				Remark
			</th>
			
			
			
			
			<th>Actions</th> 
		</tr> 
	</thead>
				


    <?php foreach ($paymentList as $pay): ?>
    <tr>
        
        <td><?php echo  $pay['Payment']['id']; ?></td>
        <td><?php echo  $pay['Payment']['generate_date']; ?></td>
		<td>$<?php echo  $pay['Payment']['amount']; ?></td>
		<td><?php echo  $pay['Payment']['remarks']; ?></td>
	
      
        <td>
        

        <?php echo $this->Html->link('Delete', array('action' => 'delete_payment',  $pay['Payment']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>


        </td>
	
    </tr>
    <?php endforeach; ?>

</table>
	
	
  
	</div>
			 
			
	
	
	
				

	
	
	

