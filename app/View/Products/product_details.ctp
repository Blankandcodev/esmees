 <?php foreach ($products as $product){ ?>


 <div align="center">
        <div class="container">
            </div>
			
            <div class="content_pr">
			
				<div class="pr_1">
					<div class="ppi_left">
						<div class="ppi_img">
						<?php echo '<a href="#"><img width=100%  src="'. $product['image_url'].'" ></a>' ?>
						
						 
						</div>
						  
					</div>
						
				    	<div class="ppi_rt">
						  <div class="ppi_mn">
							<div class="ppi_txt"><i>Brand Name</i></div>
								<div class="ppi_txt"><?php echo $product['name']; ?></div>
                                  <div class="cst_div">$<?php echo $product['price']; ?></div>
							    	<div class="ppi_txt2">Detail</div>
										<div class="ppi_txt3">
										<?php echo	$product['descrition'];?>
										
										
										</div>
								
						  </div>
							  <div class="ppi_btn">
							
							
								 <?php 
						  

							 if( $product['type'] == 1){
									$trakker = "&u1=GUEST-GUEST";
							}else if($product['type'] == 0){
								$trakker = "&sid=GUEST-GUEST";
							}
							  ?>
							  
							 
							 
							   <a target="_blank" href="<?php echo $product['buy_url'].$trakker; ?>"><img src="../../img/by_now_btn.png" /></a>
							
							  
							
							
							  
							  
							  
							  
							  
							  </div>
						</div>
					
						
						
						<?php echo $this->Html->link($this->Html->image("../img/adt_bnt.png" , array( 'alt' => 'Clear list')), array(
                                                    'controller' => 'Users',
                                                    'action' => 'add_wishlist',
                                                    $product['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						
					 <?php }; ?>
					
					
					
					
					
					
					
					</div>
				</div>
				
            </div> 
				
				  <div class="content_pr2">
					
				  	  <div class="ul_hd"><b>Who wears this</b></div>
						<?php if(!empty($userLists)){ ?>
							
                		 <div class="list7_a">
						 <ul>
								
								
								
								 <?php 
					foreach($memberImages as $whowear){
                        /*$count = 0;
                       
                        }*/?>
						
							  <li>
								<div class="div_pic1">
								
								
								
							<?php echo $this->Html->image('../../Users/home/'.$whowear['User']['image']);?>
								
								
							
								
								
								
								
								</div>
								  <div class="list_txt">
								    <div class="txt5"><?php echo $whowear['Product']['name']; ?>
									
									</div>
								      <div class="ul_txt"><span class="labl">
									  <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $whowear['User']['id']),true) ?>"> 
									  <?php echo $this->Text->truncate($whowear['User']['name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
									
									  
									  </a>
									  
									 </span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <?php } ?>
							  </ul>

							
						 </div>	
						 		  <div class="more1">Load More...</div>
						<?php }else{
		echo ' <div class="more1">No Records Yet!...</div>';
	    } ?>
              </div>
		   
		   		<div class="content_pr2">
				  	  <div class="ul_hd"><b>Who wears  “Brand Name”</b></div>
                		 <div class="list7_a">
						 <?php if(!empty($userBrands)){ ?>
							<ul>
							
							 <?php 
					foreach($userBrands as $brand){
                        /*$count = 0;
                       
                        }*/?>
							  <li>
								<div class="div_pic1">
								
								<?php echo $this->Html->image('Users/home/'.$brand['User']['image']);?>
								
								
								
								
								</div>
								  <div class="list_txt">
								    <div class="txt5">
									 <?php echo $this->Text->truncate($brand['Product']['name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
									
								     <div class="ul_txt"><span class="labl">
									 
									 
									   <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $whowear['User']['id']),true) ?>"> 
									  <?php echo $this->Text->truncate($brand['User']['name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
									
									  
									  </a>
									 
									 
									 </span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <?php } ?>
							  		<li>
								
                            </ul>
						 </div>	
						 		  <div class="more1">Load More...</div>
								  <?php }else{
		echo ' <div class="more1">No Records Yet!...</div>';
	    } ?>
              </div>
			  				
        
        <div class="clear"></div>		
   

