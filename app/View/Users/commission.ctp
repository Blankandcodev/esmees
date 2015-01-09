<?php
	if (!empty($vestedCommission))
					{
	
		 foreach ($vestedCommission as $key => $val){
		
		  $vesting_amount =$val['total_vested'];
		  $total_vested= $this->Number->format($val['total_vested'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
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
	
	$hidden=$bal_comm ;
	
	
	$aval_commission1=$this->Number->format($bal_comm, array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
	
	
	
?>




   <div align="center">
        <div class="container">
           
            <div class="content">
                <div class="content_div3">
                  <div class="div_bck">
                    <div class="div_img"><a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img src="../img/img17.png" /></a></div>
                    <div class="txt6"><a href="#">Back</a></div>
                  </div>
                  <div class="div2">
				
                    <div class="txt7">Commissions</div>
                    <div class="div3">
						
                       <div class="div4">
                       <div class="div4_a">
                          <div class="div4_lft">Total Commission Earned : </div>
						 
						 
                          <div class="div4_rgt"><?php echo $total_commission ;?>

						  </div>
						 
						  
                       </div>
                       </div>
                       <div class="div4">
                       <div class="div4_a">
                          <div class="div4_lft">Total Vested Amount :   </div>
                          <div class="div4_rgt1">
						  <?php echo $total_vested ;?>
						  
						</div>
                       </div>
					    <div class="div4">
                       <div class="div4_a">
                          <div class="div4_lft">Total Widthdraw Amount :   </div>
                          <div class="div4_rgt1">
						  <?php echo $aval_commission ;?>
						  
						</div>
                       </div>
					   
                       </div>
					   <div class="div4">
                       <div class="div4_a">
                          <div class="div4_lft">Available Vested Amount :   </div>
                          <div class="div4_rgt1">
						  <?php echo $aval_commission1 ;?>
						  
						</div>
                       </div>
					   
                       </div>
					   
                       <div class="div4">
                       <div class="div4_a">
					   
                          <div class="div4_lft">
						 
						
						 <div class="users form">
						 
<?php echo $this->Form->create('fetch_request', array('class'=>'cform')); ?>
<fieldset>
  <?php   echo $this->Form->input('vamount', array('value'=>'0', 'type'=>'hidden','value'=>
	$hidden));?>
    <?php
       
       
     echo $this->Form->input('amount',  array('type'=>'number', 'maxLength'=>'5','label'=>'Amount($)',  'class'=>'required '));
		
		
    ?>
	<?php echo $this->Form->submit('Widthdraw', array('class'=>'primary button med')) ?>
	<br>
	<h4 style="color:#009003; font-size:14px;">Please ensure correct Name and Address is provided prior to withdrawing funds<span style="color:red; font-size:14px;">*</span></h4>
	
	<?php echo $this->Html->link('Update Account
Info', array('controller'=>'Users', 'action'=>'update_bank_details'), array('class'=>'button primary med')); ?>
	 </fieldset>
 
<?php echo $this->Form->end(); ?>
</div>
							

							
						  
						
						 
						  
						  </div>
                          
                       </div>
                       </div>
                    
                    </div>
				
                  </div>
                
                </div>
			
				
                
                
                
                
            
            
            </div>
           
        
        <div class="clear"></div>
        </div>
   
   </div>
   


