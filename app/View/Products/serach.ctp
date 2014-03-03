
 <div align="center">
        <div class="container">
         
            <div class="content">
                <div class="content_div1">
				  
                  
			
				

                
                </div>
              
           
                <div class="content_div2">
                  <div class="div_head">
                     <div class="txt_lft">#SEARCH<span class="span2">Results</span></div>
                     <div class="txt_rgt"><a href="#">Men/Women</a></div>
                  </div>
				  
				
                  <div class="list2">
				  
                    <ul>
					  <?php foreach ($allProducts as $product): ?>
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
                           <div class="txt3">
						    <?php echo $this->Text->truncate($product['Product']['name'],10,array('ellipsis' => '...','exact' => 'false')); ?>
						   </div>
                           <div class="txtt3">$<?php echo  $product['Product']['price']; ?></div>
                      
                        </div>
						
                      </li>
					  
					   <?php endforeach; ?>
                     </ul>
                   
                  </div>
				 
                </div>
				<div class="more1">
				  <?php echo $this->Paginator->numbers(); ?>
					
		<?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
		<?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>

			<?php echo $this->Paginator->counter(); ?></div>
                </div>
             
            
            
            </div>
            
        
        <div class="clear"></div>
        </div>
   
   </div>
  