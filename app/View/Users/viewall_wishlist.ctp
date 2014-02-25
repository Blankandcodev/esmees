
   <div align="center">
        <div class="container">

            <div class="content_fwd">
               
                <div class="content_flwd">
					<div class="bk"><span><a href="#"><img src="<?php echo $this->webroot; ?>img/arw.png" /></a></span>Back </div>
						
					
					<div class="cntnt_fwd_main">
						<div class="lft_hd">WishList Product</div>
							 <div class="rt_head"></div>
					</div>
				
				
				
				
				
				
				
                 
                  <div class="list4">
				  <?php if(!empty($wishLists)){ ?>
                    <ul>
					
					  <?php 
					foreach($wishLists as $wis){
                        /*$count = 0;
                       
                        }*/?>
					
					
					
					
					
					
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
						 <div class="port_txt3">
                           <div class="port_txt"><img src="<?php echo $this->webroot; ?>img/portfolio_icon.png" />
					 <?php echo $this->Html->link('Delete', array('action' => 'delete_wishlist', $wis['Wishlist']['id']), null, 'Are you sure?' )?> 
						   <span>
						  
						  
						  <span>999</span> <img src="<?php echo $this->webroot; ?>img/like.png" />
						 
						   </span> </div>
                          </div> 
                          <div class="list_txt">
						  
							
						  
						     <div class="txt5"><?php echo $wis['Product']['name']; ?></div>
							 <div class="ul_txt"><span class="labl"><?php echo $wis['User']['name']; ?></span></div>
						</div>
                      </li>
					   <?php } ?>
                      <li>
					  </ul>
					   <?php }else{
		echo '<div class="more1">No Record Yet!...</div>';
	    } ?>  
					  </div>
					
					<div class="cntnt_fwd_main">
						<div class="lft_hd">WishList User's Look</div>
							 <div class="rt_head"></div>
					</div>
					 <div class="list4">
					  <?php if(!empty($userLooks)){ ?>
						 <ul>
						 
						
						  <?php 
					foreach($userLooks as $look){
                        /*$count = 0;
                       
                        }*/?>
					
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
						 <div class="port_txt3">
                           <div class="port_txt"><img src="<?php echo $this->webroot; ?>img/portfolio_icon.png" />
				<?php echo $this->Html->link('Delete', array('action' => 'delete_wishlistlook', $look['Wishlist']['id']), null, 'Are you sure?' )?>  
						   <span>
						  
						  
						  <span>999</span> <img src="<?php echo $this->webroot; ?>img/like.png" />
						 
						   </span> </div>
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
                <?php }else{
		echo '<div class="more1">No Record Yet!...</div>';
	    } ?>  
                
                
                
            
            
            </div>
           
        
        <div class="clear"></div>
        </div>
   
   </div>


