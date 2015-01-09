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
						  
						 
							
	<?php echo $this->Form->create('fetch_requset'); ?>
   
        
    <?php
		echo $this->Form->input('role', array('value'=>'0', 'type'=>'hidden'));
		echo $this->Form->input('vamount', array('type'=>'hidden', 'value'=>$total_vested ));
		
		echo $this->Form->input('amount', array('label'=>'Amount','maxLength'=>'200', 'type'=>'number'),array('class'=>'div4_rgt1'));
		
    ?>
	<?php echo $this->Form->submit('withdraw', array('class'=>'primary button med')) ?>
  
	<?php echo $this->Form->end(); ?>
							
						  
						
						 
						  
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


