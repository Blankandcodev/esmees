

   <div align="center">
        <div class="container">
         
            <div class="content_pr">
				<div class="pr_1">
					<div class="pr_left">
					
						<div class="pr_img">
						
						<?php 
		
												if($user['image']!=NULL)
												{
													$image='Users/home/'.$user['image'];
												}
												else
												{
													$image="../img/noimage.jpg";
													
													
												}
												
												echo $this->Html->image($image, array('width'=>'180')); ?>
						
						
						
						
						
						</div>
							<div class="pr_mn">
							<div class="pr_txt"><span class="labl">Username:</span><span><?php echo  $user['name']; ?></span>
								
							<?php echo $this->Form->create('User');?>
							
   
								<?php echo $this->Form->Hidden('user_id', array('value' => $user['id']));?>
								
								
								
								

							
								
								
								
								
								
								
								
							
							</div>
							</div>
								<div class="pr_mn">
									<div class="pr_txt"><span class="labl"><i>Follower:</span></i><span><?php echo $totalUser ?></span></div>
								</div>
									<div class="pr_mn">
										<div class="pr_txt"><span class="labl"><i>Like:</span></i><span>999,999,999</span></div>
									</div>
										<div class="flw_btn">
											
											   	<?php echo $this->Form->submit('../img/follw_btn.png',array( 'width' => '100'));?>
										
										
									</div>
										
					</div>
				    	<div class="pr_rt">
							<div class="ad_spc"><img src="../../img/ad_sp.png" /></div>
						</div>
				</div>
			
            </div> 
				  <div class="content_pr2">
				  	  <div class="ul_hd"><b>Username‘s Looks</b></div>
                		 <div class="list7_a">
						 <?php if(!empty($userLooks)){ ?>
						 
						   <ul>
					<?php foreach($userLooks as $mlook){?>
                      <li>
                        <div class="div_pic1"><a href="#"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a></div>
                          <div class="list_txt">
						     <div class="txt5">
							 
							 <?php echo $this->Text->truncate($mlook['Look']['caption_name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
							 
							 </div>
							    <div class="ul_txt"><span class="labl">
								
								 
								 <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $mlook['Look']['user_id']),true) ?>">
								
								<?php echo $this->Text->truncate($mlook['User']['name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
								
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
				  	  <div class="ul_hd"><b>People who follow me...</b></div>
                		 <div class="list8">
						  <?php if(!empty($peopleFollos)){ ?>
							<ul>
							<?php foreach($peopleFollos as $follome){?>
							  <li>
								<div class="div_pic5">
								
								<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $follome['User']['id']),true) ?>">
								
								<?php echo $this->Html->image('Users/home/'.$follome['User']['image']);?>
								
								</a>
								
								</div>
							  </li>
							    <?php } ?>
							  
							 </ul> 		
						 		  <div class="more1">Load More...</div>
								    <?php }else{
		echo ' <div class="more1">No Records Yet!...</div>';
	    } ?>
              </div>
		   
		   
        
        <div class="clear"></div>
        </div>
   
   </div>
   
</div>

</body>
</html>
