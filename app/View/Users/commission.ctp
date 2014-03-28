<?php
	
		 foreach ($vestedCommission as $key => $val){
		  $total_vested= $this->Number->format($val['total_vested'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
	}
	
	 foreach ($totalCommission as $key => $val){
		  $total_commission= $this->Number->format($val['total'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
	}
	 foreach ($sample_arr as $a){
		  $aval_commission= $this->Number->format($a, array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));

	}
	
	
	
	
	
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
                          <div class="div4_lft">Available Vested Amount :   </div>
                          <div class="div4_rgt1">
						  <?php echo $aval_commission ;?>
						  
						</div>
                       </div>
					   
                       </div>
					   
                       <div class="div4">
                       <div class="div4_a">
					   
                          <div class="div4_lft">
						 
						
						 <div class="users form">
<?php echo $this->Form->create('User', array('class'=>'cform')); ?>
    <fieldset>
        <legend><?php echo __('Bank Info'); ?></legend>
    <?php
       
       
        echo $this->Form->input('bname',  array('type'=>'text', 'maxLength'=>'250','label'=>'Amount',  'class'=>'required '));
		echo $this->Form->input('bname',  array('type'=>'text', 'maxLength'=>'250','label'=>'Bank Name',  'class'=>'required '));
		echo $this->Form->input('bank_account',  array('type'=>'text', 'maxLength'=>'250','label'=>'Bank Account Number', 'class'=>'required'));
        echo $this->Form->input('bank_ssnumber',  array('type'=>'text', 'maxLength'=>'250','label'=>'Social Security Number', 'class'=>'required'));
        echo $this->Form->input('bank_rounting',  array('type'=>'text', 'maxLength'=>'250','label'=>'Bank Routing Number', 'class'=>'required'));
	
		
		echo $this->Country->select('country', array('label'=>'Country', 'maxLength'=>'15', 'type'=>'text'));
		
    ?>
	<?php echo $this->Form->submit('Widthdraw', array('class'=>'primary button med')) ?>
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
   


