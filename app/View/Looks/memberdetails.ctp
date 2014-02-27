
 
 <div align="center">
        <div class="container">
            
            <div class="content_pr">
				<div class="pr_1">
					<div class="ppi_left">
						<div class="ppi_img">
						
						
		
		
				<?php echo $this->Html->image('Looks/big/'.$looks['Look']['image']);?>
						</div>
							<div class="ppi_list">
								<ul>
								<?php foreach($memberImages as $mimage){?>
									 
									<li>
									<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'memberdetails', $looks['Look']['product_id']),true) ?>"><?php echo $this->Html->image('Looks/small/'.$mimage['Look']['image']);?></a></li>
															
									
								
									</li>
								<?php } ?>
								
								
								</ul>
								
							</div>
						  
					</div>
				    	<div class="ppi_rt">
						  <div class="ppi_mn">
						  	<div class="imp_txt"><i>User‘s Caption</i></div>
								<div class="imp_txt2">
								
								
								
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $looks['Look']['user_id']),true) ?>">
								
								<?php echo $this->Text->truncate($looks['User']['name'],15,	array('ellipsis' => '...','exact' => 'false')); ?>
								
								</a>
								
								</div>
								
							
							<div class="ppi_txt"><i>BrandName</i></div>
								<div class="ppi_txt"><?php echo $looks['Product']['name']; ?></div>
                                <div class="cst_div">$<?php echo $looks['Product']['price']; ?></div>
							    	<div class="ppi_txt2">Detail</div>
										<div class="imp_txt3">
											
											
											<?php echo $this->Text->truncate($looks['Product']['descrition'],100,	array('ellipsis' => '...','exact' => 'false')); ?>
										</div>
								
						  </div>
							  <div class="ppi_btn">
														  <?php 
						  

							 if( $looks['Product']['type'] == 1){
								 $referid=$looks['User']['member_id'];
								 $cid = isset($loggeduser['member_id']) ? $loggeduser['member_id'] : 'GUEST';
								
								$trakker = "&u1=$referid-$cid";
							}else if($looks['Product']['type'] == 0){
								$trakker = "&sid=$referid-$cid";
							}else{
								$trakker = "";
							}
							  ?>
							  <a target="_blank" href="<?php echo $looks['Product']['buy_url'].$trakker; ?>"><img src="../../img/by_now_btn.png" /></a>

							 
							  </div>
						</div>
							<div class="imp_lst">
								<ul>
      							   
							       <li>
								   
								   <?php echo $this->Html->link($this->Html->image("../img/lk_it.png" , array( 'alt' => 'Clear list')), array(
                                                    'controller' => 'Users',
                                                    'action' => 'add_Like',
                                                    $looks['Look']['product_id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
								   
								   
								   
								   </li>
								   <li style="margin-right:0px"><?php echo $totalLike ?></li>
								</ul>
							</div>
							   
							<div class="imp_btn2">
								<?php echo $this->Html->link($this->Html->image("../img/adt_bnt.png" , array( 'alt' => 'No Image')), array(
                                                    'controller' => 'Users',
                                                    'action' => 'addlooks_wishlists',
                                                    $looks['Look']['product_id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
							
							</div>
				</div>
            </div> 
				  <div class="content_pr2">
				  	  <div class="ul_hd"><b>User‘s Looks</b></div>
                		 <div class="list7_a">
							<ul>
								<?php foreach($memberLooks as $mlook){?>
							  <li>
								<div class="div_pic1"><a href="#">
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'memberdetails', $mlook['Look']['product_id']),true) ?>"><?php echo $this->Html->image('Looks/big/'.$mlook['Look']['image']);?></a>
								
								
								
								
								</div>
								  <div class="list_txt">
								    <div class="txt5">
									
									<?php echo $this->Text->truncate($mlook['Look']['caption_name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
									
									</div>
								      <div class="ul_txt"><span class="labl">
									  
									   <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $mlook['Look']['user_id']),true) ?>">
								
										<?php echo $this->Text->truncate($mlook['User']['name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
								
								</a>
								
									  
									  
									  
									  
									  </span><span><?php echo $totalLike ?></span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <?php } ?>
							  </ul>

						 </div>	
						 		  <div class="more1">Load More...</div>
              </div>
		   
		   		
			  				
        
        <div class="clear"></div>		
   
   </div>
   					
         </div>