
 <div align="center">
        <div class="container">
         
            <div class="content">
                <div class="content_div1">
                    <div class="div_lft">
                       <div class="div_txt">
                          <div class="titl">Shop by Hot Products</div>
                          <div class="txt1">Lorem Ipsum Standard text Portion for
Dummy Text Area Lorem Ipsum<br />
Standard text Portion<br />
for Dummy Text.</div>
                       
                       </div>
                       <div class="div_btn">
                          <input type="button" value="Buy Now!" class="btnn1" />
                       </div>
                    
                    </div>
                    <div class="div_rgt">
                       <div class="div_txt">
                          <div class="titl">Shop by Member Looks</div>
                          <div class="txt1">Lorem Ipsum Standard text Portion for
Dummy Text Area Lorem Ipsum<br />
Standard text Portion<br />
for Dummy Text.</div>
                       
                       </div>
                       <div class="div_btn">
                          <input type="button" value="Buy Now!" class="btnn1" />
                       </div>
                    
                    </div>
                
                </div>
                <div class="banr"></div>
                <div class="content_div2">
                  <div class="div_head">
                     <div class="txt_lft">#TREND<span class="span2">Setters</span></div>
                     <div class="txt_rgt"><a href="<?php echo $this->Html->url(array('controller'=>'products', 'action'=>'all_product'),true) ?>">Men/Women</a></div>
                  </div>
                  <div class="list1">
                    <ul>
					<?php foreach ($looks as $look): ?>
                      <li>
					 
					<?php
						
												
 echo $this->Html->link($this->Html->image('Looks/big/'.$look['Look']['image']), array(
                                                    'controller' => 'Looks',
                                                    'action' => 'memberdetails',
                                                    $look['Look']['product_id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						
						
					
					
					  </li>
					
                      <?php endforeach; ?>
                    </ul>
                  
                  </div>
                </div>
                <div class="content_div2">
                  <div class="div_head">
                     <div class="txt_lft">#NewOnThe<span class="span2">Web</span></div>
                     <div class="txt_rgt"><a href="<?php echo $this->Html->url(array('controller'=>'products', 'action'=>'all_product'),true) ?>">Men/Women</a></div>
                  </div>
				  
				
                  <div class="list2">
				  
                    <ul>
					  <?php foreach ($products as $product): ?>
                      <li>
						
                        <div class="div_pic">
						

<?php echo $this->Html->link($this->Html->image($product['Product']['image_url'], array( 'alt' => 'No Image')), array(
                                                    'controller' => 'Products',
                                                    'action' => 'product_details',
                                                    $product['Product']['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>						  
						  
						  

						  
						</div>
                        <div class="list_txt">
                           <div class="txt3"><?php echo  $product['Product']['name']; ?></div>
                           <div class="txtt3">$<?php echo  $product['Product']['price']; ?></div>
                      
                        </div>
						
                      </li>
					  
					   <?php endforeach; ?>
                     </ul>
                   
                  </div>
				 
                </div>
                <div class="add_sec">Space for ADS</div>
            
            
            </div>
            
        
        <div class="clear"></div>
        </div>
   
   </div>
  