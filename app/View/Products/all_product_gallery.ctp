
 
 <div align="center">
        <div class="container">

            <div class="content">
                <div class="content_left">
                   <div class="lft_head"><b>#NewOnThe</b><i>Web</i></div>
                   <div class="category_sec">
				   
					
                     <ul>
						<li>Categories</li>

                       <li>
                         <a href="#"><img src="../img/img13.png" width="7" height="10" /></a>
                       
						 
                       </li>
					   
                        </ul>
                   
                   </div>
				   
				   
				   
				    <div class="category_sec">
				   
					 
						
                       <ul>
						<li>Brands</li>
						 
                       <li>
                         <a href="#"><img src="../img/img13.png" width="7" height="10" /></a>
                    
						
						
						 
						
						
						 
                       </li>
					   
                        </ul>
                   
                   </div>
                
                </div>
                <div class="content_rgt3">
                  <div class="div1">
				
                    <div class="srch_div1">
				
  	<?php
					echo $this->Form->create('searchProduct', array('type' => 'post'));
					echo $this->Form->input('keywords',array('style'=>'width:150px'));
					echo $this->Form->end('Search');
						
					?>
						
					
					
                         </div>
                      
                      </div>
                    <div class="div_rgt1">
                      <div class="txt4">Sort by :</div>
                      <div class="selct">
                        <select>
                          <option>Most Recent</option>
                          <option>Most Recent</option>
                          <option>Most Recent</option>
                        </select>
                      </div>
                    </div>  
                  
                  </div>
                  <div class="list3">
				  
				  <ul>
					  <?php foreach ($allProducts as $product): ?>
                      <li>
                        <div class="div_pic1">
							<?php echo $this->Html->link($this->Html->image($product['Product']['image_url'], array( 'alt' => 'No Image')), array(
                                                    'controller' => 'Products',
                                                    'action' => 'product_details',
                                                    $product['Product']['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>	
						</div>
                        <div class="list_txt">
                           <div class="txt5">
						   
						   <?php echo $this->Text->truncate($product['Product']['name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
						   
						   </div>
                           <div class="txtt5">$<?php echo  $product['Product']['price']; ?></div>
                        
                        </div>
                      </li>
					    <?php endforeach; ?>
                     
                      
                      
                    </ul>
                  
                  
                  </div>
                  <div class="more1">Load More...</div>
                </div>
                
                
                
                
            
            
            </div>

        
        <div class="clear"></div>
        </div>
   
   </div>