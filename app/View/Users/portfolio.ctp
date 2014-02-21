
<div align="center">
        <div class="container">
            <div class="header_sectn">
                
                </div>
             
            
            </div>
            <div class="content">
				 
                <div class="prtflo_div">
                  <div class="div_bck">
                    <div class="div_img"><a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img src="../img/img17.png" /></a></div>
                    <div class="txt6">
					<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>">Back</a>
					</div>
                  </div>
                  <div class="div2">
                    <div class="txt7">Portfolio</div>
                    <div class="div3">
                   
                     <div class="content">
                      <div class="content_left2">		
                        <div class="category_sec2">
                     <ul>
						 <?php foreach ($orderLists as $order): ?>
                       <li>
							<div class="div_pic3">
							<?php echo '<a href="'. $order['Product']['buy_url'] .'"><img width=65%  src="'. $order['Product']['image_url'].'" ></a>' ?>
							<div class="div_pic4">
						
							</div>
							</div> 
                          <?php echo  $order['Product']['name']; ?> <span><span>
                      
						
                      
                   
                       
                       </li>
						
					   <?php endforeach; ?>
					   </ul>
                       
                   
                   </div>
                   </div>
				   
				 
				   
                        
                    	 <div class="content_rgt5">
                 
                  <div class="list_4">
                    <ul>
					<?php foreach($memberImages as $mlook){?>
                      <li>
                        <div class="div_pic2">
						<?php echo $this->Html->image('Looks/big/'.$mlook['Look']['image']);?>
						
						</div>
                        <div class="list2_txt">
                         <div class="port_txt3">
                           <div class="port_txt"><img src="../img/like.jpg" /> 999<span><img src="../img/setting_icon.png" /><?php echo $this->Html->link('edit', array('controller' => 'Users', 'action' => 'edit_lookimage',  $mlook['Look']['id']));?> <img src="../img/portfolio_icon.png" /><?php echo $this->Html->link('delete', array('controller' => 'Users', 'action' => 'edit_lookimage',  $mlook['Look']['id']));?></span> </div>
                          </div> 
                           <div class="port_txt2"><?php echo $mlook['Look']['caption_name']; ?></div>
                        
                        </div>
                      </li>
					    <?php } ?>
						</ul>
                       
            
            
            </div>
                       
                    
                       </div>
                       </div>
                    
                    </div>
                  </div>
                
                </div>
                
                
                
                
            
            
            </div>
            <div class="footer_sec">
               <div class="fotr_lft">All Rights Recieved. Copyright @ Site Name Here 2012.</div>
               <div class="fotr_rgt">
                  <ul>
                    <li><a href="#">Terms & Condition</a></li>
                    <li>.<a href="#">Privacy Policy</a></li>
                    <li>.<a href="#">Contact Us</a></li>
                  </ul>
               
               </div>
            </div>
        
        <div class="clear"></div>
        </div>
   
   </div>


</body>
</html>
