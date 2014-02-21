<div align="center">
        <div class="container">
      
               
            <div class="content">
                <div class="content_left">
                   <div class="ma_hd">My Dashboard</div>
                   <div class="category_sec">
                     <ul>
                       <li><a href="#"></a></li>
					   <li> 
					   
					   </li>
						<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'portfolio'),true) ?>">PORTFOLIO</a></li>
                        <li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'my_account'),true) ?>">MY PROFILE</a></li>
						<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'order_details'),true) ?>">MANAGE LOOKS</a></li>
						
                        <li><a href="#">MY OFFER</a></li>
						<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followed_user'),true) ?>">FOLLOWED USERS</a></li>
						<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'viewall_wishlist'),true) ?>">WISHLIST PRODUCT</a></li>
						
						
                     
                     </ul>
                   </div>
                </div>
						<div class="ma_right">
							<div class="mc_prf">
								<div class="mc_prf_hd">Profile Picture</div>
									<div class="img_main">
										<div class="prf_img">
										<?php echo $this->Html->image('Users/home/'.$user['image']);?>
										</div>
											<div class="img_dwn_main">
											  <div class="img_ed"><img src="img/img_edit.png" /><span><?php echo $this->Html->link('Edit', array('controller'=>'Users', 'action'=>'user_profile',$user['id']));?></span></div>
											  	 <div class="img_ed2"><img src="img/cros.png" /><span><?php echo $this->Html->link('delete', array('controller'=>'Users', 'action'=>'user_profile',$user['id']));?></span></div>
											</div>  
									</div>	
							</div>
								<div class="ac_left">
								   <div class="ac_txt_main"><div class="ac_hd">Account Info<span>
								   
								   <?php echo $this->Html->link('Edit', array('controller'=>'Users', 'action'=>'user_profile',$user['id']));?> 
								   
								   
								   </span></div></div>
									
									
									   <div class="account_sec">
										 <ul>
										
										   <li>Email Address : <?php echo  $user['username']; ?></li>
										   <li>First Name:  <?php echo  $user['name']; ?> </li>
										   <li>Last Name :</a></li>
										   <li>City:  <?php echo  $user['city']; ?> </li>
										   <li>State:  <?php echo  $user['state']; ?></li>
										   <li>Zip Code:  <?php echo  $user['zip']; ?></li>
										   <li>Country:  <?php echo  $user['country']; ?></li>
										   
										  
										   
										  
										 
										 </ul>
                                       </div>
									    
									   			<div class="ac_rt_txt"><a href="#">Change password</a>
												
												</div>
												
													       
								   </div>
								   					<div class="ac_txt2">
														<div class="account_sec2">
															<div class="account_sec2_txt"><span class="labl">Followers :</span> <span><?php echo $flowCounts ?></span></div>
						                                 </div>
														 	<div class="account_sec3">
															<div class="account_sec3_txt"><span class="labl">Likes :</span> <span><?php echo $likeCounts ?></span></div>
						                                 </div>
														 	<div class="account_sec3">
															
															<div class="account_sec3_txt"><span class="labl">Commission :</span> <span>999,999,9999</span></div>
						                                 </div>
													</div>	 
                         </div>
				<div class="content_rgt2">
						<div class="ac_list_hd">New<span class="span4">Looks</span></div>
				
                  <div class="ac_list">
				  
                    <ul>
					<?php foreach($userLooks as $mlook){?>
                      <li>
                        <div class="div_pic1"><a href="#"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a></div>
                          <div class="list_txt">
						     <div class="txt5"><?php echo $mlook['Look']['caption_name']; ?></div>
							    <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
						</div>
                      </li>
					    <?php } ?>
						</ul>
					
                  </div>
                  <div class="more1">Load More...</div>
                </div>
				<div class="content_rgt2">
						<div class="ac_list_hd">Wish<span class="span4">list</span></div>
				
                  <div class="ac_list">
                    <ul>
					<?php foreach($wishLists as $wish){?>
                      <li>
                        <div class="div_pic1">
						<?php echo $this->Html->link($this->Html->image($wish['Product']['image_url'], array( 'alt' => 'No Image')), array(
                                                    'controller' => 'Products',
                                                    'action' => 'product_details',
                                                   $wish['Product']['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						</div>
                          <div class="list_txt">
						     <div class="txt5"><?php echo $wish['Product']['name']; ?></div>
							    <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
						</div>
                      </li>
					     <?php } ?>
                     
                    </ul>
                  </div>
                  <div class="more1">Load More...</div>
                </div>
				<div class="content_rgt2">
						<div class="ac_list_hd">YouMight<span class="span4">Like</span></div>
				
                  <div class="ac_list">
                    <ul>
					<?php foreach($likeLists as $like){?>
                      <li>
                        <div class="div_pic1">
						<?php echo $this->Html->link($this->Html->image($like['Product']['image_url'], array( 'alt' => 'No Image')), array(
                                                    'controller' => 'Products',
                                                    'action' => 'product_details',
                                                   $wish['Product']['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						
						</div>
                          <div class="list_txt">
						     <div class="txt5"><?php echo $like['Product']['name']; ?></div>
							    <div class="ul_txt"><span class="labl"><?php echo $like['User']['name']; ?></span><span>999</span><span><img src="img/like.png" /></span></div>
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


</body>
</Html>
