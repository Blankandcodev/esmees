<?php
	
		 foreach ($vestedCommission as $key => $val){
		  $total_vested= $this->Number->format($val[0]['total_vested'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
	}
	
	 foreach ($totalCommission as $key => $val){
		  $total_commission= $this->Number->format($val[0]['total'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
		  
		  
	}
	
	 foreach ($sample_arr as $a){
		  $aval_commission= $this->Number->format($a, array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));

	}
	
	
	
?>



	


<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'widthdraw_request'), array('class'=>'add')); ?>"> View WidthDraw Request </a>
	<h1 class="title">WidthDraw Commission</h1>
</div>
	
	<div class="account-info">
					
					<h2 class="sub-title bordered">Commission Info</h2>
					<ul class="info-list">
					
						
						<li><span>Total Commission Earned:  </span><?php echo  $total_commission; ?> </li>
						<li><span>Total Amount Vested:  </span><?php echo  $total_vested; ?> </li>
						<li><span>Available Vested Amount:  </span><?php echo  $aval_commission; ?> </li>
						
						
							
					
					</ul>
					
	
	</div>
	
					 
				</div>
	<div>

	<?php echo $this->Form->create('fetch_requset'); ?>



	

    
   
	
	
	<?php echo $this->Form->input('amount', array('label'=>'WidthDraw Amount', 'type'=>'text', 'class'=>'required'));?>
	
	<?php echo $this->Form->input('remark', array('label'=>'Remark', 'type'=>'textarea', 'class'=>'required'));?>
	
	<?php echo $this->Form->Submit('WidthDraw Commission',array('class'=>'button primary left')); ?>
	
	
	<?php echo $this->Form->end(); ?>
  

	
	<br>
	
	<div class="account-info">
					
					<h2 class="sub-title bordered">Account Info</h2>
					<ul class="info-list">
					<?php foreach ($userDetails as $user): ?>
						<li>

						<span>Email Address :</span> <?php echo  $user['User']['username']; ?>
						</li>
						
						<li><span>First Name:  </span><?php echo  $user['User']['name']; ?> </li>
						<li><span>Middle Name:  </span><?php echo  $user['User']['middle_name']; ?> </li>
						<li><span>Last Name:  </span><?php echo  $user['User']['last_name']; ?> </li>
						<li><span>Gender:  </span><?php echo  $user['User']['last_name']; ?> </li>
						<li><span>Date Of Birth:  </span><?php echo  $user['User']['dob']; ?> </li>
						<li><span>City:  </span><?php echo $user['User']['city']; ?> </li>
						<li><span>State:  </span><?php echo  $user['User']['state']; ?></li>
						<li><span>Zip Code: </span> <?php echo  $user['User']['zip']; ?></li>
						<li><span>Country:  </span><?php echo $user['User']['country']; ?></li>
						<li><span>Social Security Number:  </span><?php echo $user['User']['ss_number']; ?></li>
						<li><span>Bank Name:  </span><?php echo $user['User']['bankname']; ?></li>
						<li><span>Bank Account Number:  </span><?php echo $user['User']['bankaccount_no']; ?></li>
						<li><span>Bank Routing Number:  </span><?php echo $user['User']['bankrouting_no']; ?></li>
						
							
					
					</ul>
					 <?php endforeach; ?>
				</div>

	
	
	

