
<div align="center">
        <div class="container">
            <div class="header_sectn">
                
                </div>
             
            
            </div>
            <div class="content">
				 
                <div class="prtflo_div">
                  <div class="bk"><span><a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img src="../../img/arw.png" /></a></span>Back </div>
					
                  </div>
                  <div class="div2">
                    <div class="txt7">View all Looks</div>
                    <div class="div3">
                   
                     <div class="content">
                      <div class="content_left2">		
                        <div class="category_sec2">
                    
                        <ul>
						
						
						
						 <?php foreach ($productImages as $product): ?>
                       <li>
					   
					   <div class="div_pic3">
							<?php echo '<a href="#"><img width=65%  src="'. $product['Product']['image_url'].'" ></a>' ?>
							<div class="div_pic4">
						
							</div>
							</div> 
                      
						
                      
                   
                         <?php echo  $product['Product']['name']; ?>
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
                           <div class="port_txt"><img src="<?php echo $this->webroot; ?>img/setting_icon.png" />  <?php echo $this->Html->link('edit', array('controller' => 'Users', 'action' => 'edit_lookimage',  $mlook['Look']['id']));?><span>
						  
						  
						   <img src="<?php echo $this->webroot; ?>img/portfolio_icon.png" />
						   <?php echo $this->Html->link('Delete', array('controller' => 'Users', 'action' => 'delete_lookimage',  $mlook['Look']['id'], $product['Order']['order_id']),null, 'Are you sure?');?>
						   </span> </div>
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
            
        
        <div class="clear"></div>
        </div>
   
   </div>


