
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
					  <?php foreach ($allLooks as $look): ?>
                      <li>
						
                        <div class="div_pic">
						

<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'detail', $look['Look']['product_id']),true) ?>"><?php echo $this->Html->image('Looks/small/'.$look['Look']['image']);?></a>					  
						  
						  

						  
						</div>
                        <div class="list_txt">
                           <div class="txt3">
						    <?php echo $this->Text->truncate($look['Look']['caption_name'],10,array('ellipsis' => '...','exact' => 'false')); ?>
							
							
							
							
						   </div>
                           <div class="txtt3"></div>
                      
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
  