
   <div align="center">
        <div class="container">
           
            <div class="content">
                <div class="content_left">
                   <div class="lft_head"><b>#TREND</b><i>Setters</i></div>
                   <div class="category_sec">
				   
				   
				    <ul>
						<li>Categories</li>
						  <?php foreach($categories as $category){ ?>
                       <li>
                         <a href="#"><img src="../img/img13.png" width="7" height="10" /></a>
                         <a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'gallery',$category['Category']['id'])) ?>"><?php echo  $category['Category']['name']; ?>
						 
						
						 </a>
						 
                       </li>
					   	<?php }; ?>
                        </ul>
                   
				 
				   
                    
                    
                   
                   </div>
				   
				    
				   
				   
                
                </div>
                <div class="content_rgt3">
                  <div class="div1">
				  <?php
					
					
					echo $this->Form->Create('Search',array('url'=>array('controller'=>'Looks','action'=>'serach'),'type'=>'get'));
					echo $this->Form->input('keyword');
					
					echo $this->Form->end('Serach')
					
					
					
					
						
					?>
                    <div class="srch_div1">
                         
						 		
		
						
                      
                      </div>
                    <div class="div_rgt1">
                      <div class="txt4">Sort by :</div>
                      <div class="selct">
                        <select>
                          <option>Most Recent</option>
                          <option>Most Popular</option>
                          <option>Trending</option>
                        </select>
                      </div>
                    </div>  
                  
                  </div>
                  <div class="list3">
				  <ul>
					  <?php foreach ($allLooks as $look): ?>
                      <li>
                        <div class="div_pic1">
							<?php echo $this->Html->link($this->Html->image('Looks/home/'.$look['Look']['image']), array(
                                                    'controller' => 'Looks',
                                                    'action' => 'detail',
                                                    $look['Look']['product_id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						</div>
                        <div class="list_txt">
						
						
						
						
                           <div class="txt5"><?php echo  $look['Look']['caption_name']; ?></div>
                           <div class="txtt5"><?php echo  $look['User']['name']; ?>
						   
						   
						   
						   </div>
                        
                        </div>
                      </li>
					    <?php endforeach; ?>
                     
                      
                      
                    </ul>
                    
                  
                  </div>
                </div>
      
            </div>
           
        
        <div class="clear"></div>
        </div>
   
   </div>


</body>
</html>
