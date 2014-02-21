
   <div align="center">
        <div class="container">

            <div class="content_fwd">
               
                <div class="content_flwd">
					<div class="bk"><span><a href="#"><img src="../img/arw.png" /></a></span>Back </div>
						
					
					<div class="cntnt_fwd_main">
						<div class="lft_hd">WishList Product</div>
							 <div class="rt_head"></div>
					</div>
				
                 
                  <div class="list4">
                    <ul>
					<?php foreach($wishLists as $wis){?>
					
                      <li>
                        <div class="div_pic1">
						<?php echo $this->Html->link($this->Html->image($wis['Product']['image_url'], array( 'alt' => 'No Image')), array(
                                                    'controller' => 'Products',
                                                    'action' => 'product_details',
                                                    $wis['Product']['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						
						
						</div>
                          <div class="list_txt">
						     <div class="txt5"><?php echo $wis['Product']['name']; ?></div>
							    <div class="ul_txt"><span class="labl"><?php echo $wis['User']['name']; ?></span><span>999</span><span><img src="../img/like.png" /></span></div>
						</div>
                      </li>
					   <?php } ?>
                      <li>
					  </ul>
					  </div>
					
					<div class="cntnt_fwd_main">
						<div class="lft_hd">WishList User's Look</div>
							 <div class="rt_head"></div>
					</div>
					 <div class="list4">
						 <ul>
						<?php foreach($userLooks as $look){?>
                      <li>
                        <div class="div_pic1">
						
						
						
						<?php echo $this->Html->link($this->Html->image('Looks/big/'.$look['Look']['image'], array( 'alt' => 'No Image')), array(
                                                    'controller' => 'Looks',
                                                    'action' => 'memberdetails',
                                                    $look['Product']['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						
						
						
						</div>
                          <div class="list_txt">
						     <div class="txt5"><?php echo $look['Look']['caption_name']; ?></div>
							    <div class="ul_txt"><span class="labl"><?php echo $look['User']['name']; ?></span><span>999</span><span><img src="../img/like.png" /></span></div>
						</div>
                      </li>
					   <?php } ?>
                      
					  </ul>
					  
					   </Div>
					
					  
                    
					  
					
 </div>
					
					
					
					
					
					
					
					                
                 
                  <div class="more1">Load More...</div>
                </div>
                
                
                
                
            
            
            </div>
           
        
        <div class="clear"></div>
        </div>
   
   </div>


