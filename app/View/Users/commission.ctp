
   <div align="center">
        <div class="container">
           
            <div class="content">
                <div class="content_div3">
                  <div class="div_bck">
                    <div class="div_img"><a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img src="../img/img17.png" /></a></div>
                    <div class="txt6"><a href="#">Back</a></div>
                  </div>
                  <div class="div2">
				  <?php foreach($commissionList as $comm){
				   ?>
                    <div class="txt7">Commissions</div>
                    <div class="div3">
					<?php echo $this->Form->create('lookupload', array('type'=>'file'));  ?>
                       <div class="div4">
                       <div class="div4_a">
                          <div class="div4_lft">Total Commission Earned : </div>
                          <div class="div4_rgt">$ <?php echo $comm['Commission']['commission_amount'] ;?> </div>
                       </div>
                       </div>
                       <div class="div4">
                       <div class="div4_a">
                          <div class="div4_lft">Total Amount Vested :   </div>
                          <div class="div4_rgt1">$<?php echo $comm['Commission']['commission_amount'] ;?></div>
                       </div>
					   
                       </div>
					    <div class="div4">
                       <div class="div4_a">
                          <div class="div4_lft">Request Withdraw Amount :   </div>
                          <div class="div4_rgt1"><?php  echo $this->Form->input('amount', array('type'=>'text', 'class'=>'required','style'=>'width:75px'));?></div>
                       </div>
					   
                       </div>
                       <div class="div4">
                       <div class="div4_a">
					   
                          <div class="div4_lft">
						  
							<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'withdraw', $comm['Commission']['user_id'])); ?>" class="button primary med">Withdraw</a>
						  
						 
						  
						  </div>
                          
                       </div>
                       </div>
                    
                    </div>
					<?php echo $this->Form->end(); ?>
                  </div>
                
                </div>
				<?php } ?>
				
                
                
                
                
            
            
            </div>
           
        
        <div class="clear"></div>
        </div>
   
   </div>


