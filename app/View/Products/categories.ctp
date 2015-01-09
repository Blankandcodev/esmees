 <div align="center">
        <div class="container">

            <div class="content">
                <div class="content_left">
                   <div class="lft_head"><b>#NewOnThe</b><i>Web</i></div>
                   <div class="category_sec">
				   
					
                     <ul>
						<li>Categories</li>
						  <?php foreach($categories as $category){ ?>
                       <li>
                         <a href="#"><img src="../../img/img13.png" width="7" height="10" /></a>
                         <a href="<?php echo $this->Html->url(array('controller'=>'products', 'action'=>'categories',$category['Category']['id'])) ?>"><?php echo  $category['Category']['name']; ?>
						 
						
						 </a>
						 
                       </li>
					   	<?php }; ?>
                        </ul>
                   
                   </div>
				   
				   
				    <div class="category_sec">
				   
					 
						
                       <ul>
						<li>Brands</li>
						  <?php foreach($AllBrands as $brand){ ?>
                       <li>
                         <a href="#"><img src="../../img/img13.png" width="7" height="10" /></a>
                    
						
						 <a href="<?php echo $this->Html->url(array('controller'=>'products', 'action'=>'brands',$brand['Product']['mnf_name'])) ?>"><?php echo  $brand['Product']['mnf_name']; ?>
						
						 
						
						
						 
                       </li>
					   	<?php }; ?>
                        </ul>
                   
                   </div>
                
                </div>
                <div class="content_rgt3">
                  <div class="div1">
                    <div class="srch_div1">
                         <input type="text" value="Search products" class="txt_box1" />
                         <div class="srch_img"><a href="#"><img src="../../img/img2.png" /></a></div>
                      
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
					  <?php foreach ($products as $product): ?>
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