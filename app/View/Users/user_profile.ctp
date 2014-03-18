
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
						<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'commission'),true) ?>">COMMISSION</a></li>
						
						
                     
                     </ul>
                   </div>
                </div>
						<div class="ma_right">
							<div class="mc_prf">
								<div class="mc_prf_hd">Profile Picture</div>
									<div class="img_main">
										<div class="prf_img">
										<?php echo $this->Html->image('Users/home/'.$userProfile['User']['image']);?>
										</div>
											<div class="img_dwn_main">
											  <div class="img_ed"><img src="../../img/img_edit.png" /><span><?php echo $this->Html->link('Edit', array('controller'=>'Users', 'action'=>'user_profile',$userProfile['User']['id']));?></span></div>
											  	 <div class="img_ed2"><img src="../../img/cros.png" /><span><?php echo $this->Html->link('delete', array('controller'=>'Users', 'action'=>'user_profile',$userProfile['User']['id']));?></span></div>
											</div>  
									</div>	
							</div>
								<div class="ac_left">
								   <div class="ac_txt_main"><div class="ac_hd">Edit Account Info<span><a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>''),true) ?>"></a></span></div></div>
									
										
									   <div class="account_sec">
									   <fieldset>
											
										 <ul>
											<li>
												<?php echo $this->Form->create('User',array('type'=>'file','controller'=>'Users','action' => 'user_profile'));?>
											
											</li>
											
										  <li> 
											<?php echo $this->Form->input('name',array('label'=>' Full Name', 'type'=>'text', 'required', 'div' => array('class' => 'required'))); ?>

										  </li>
										   <li>
										   
										   <?php echo $this->Form->input('username', array('label'=>' Email Address', 'type'=>'text', 'required', 'div' => array('class' => 'required'))); ?>      
										   
										   </li>
									
										  
										 
										   <li> 
											<?php echo $this->Form->input('address',array('label'=>'Address', 'type'=>'text', 'required', 'div' => array('class' => 'required'))); ?>

										  </li>
										    <li>  
										    <?php echo $this->Form->input('ss_number', array('label'=>'Social Security Number', 'type'=>'text', 'required', 'div' => array('class' => 'required'))); ?>
										   
										  </li>
										  
										    <li>  
										    <?php echo $this->Form->input('bankname', array('label'=>'Bank Name', 'type'=>'text', 'required', 'div' => array('class' => 'required'))); ?>
										   
										  </li>
										  
										    <li>  
										    <?php echo $this->Form->input('bankaccount_no', array('label'=>'Bank Account Number', 'type'=>'text', 'required', 'div' => array('class' => 'required'))); ?>
										   
										  </li>
										  
										    <li>  
										    <?php echo $this->Form->input('bankrouting_no', array('label'=>'Bank Routing Number', 'type'=>'text', 'required', 'div' => array('class' => 'required'))); ?>
										   
										  </li>
										  
										   <li>
										   <?php echo $this->Form->input('city',array('label'=>'City', 'type'=>'text', 'required', 'div' => array('class' => 'required'))); ?>
										   </li>
											<li>
										    <?php echo $this->Form->input('state',array('label'=>'State', 'type'=>'text', 'required', 'div' => array('class' => 'required'))); ?>
										   </li>
										   <li>  
										    <?php echo $this->Form->input('zip', array('label'=>'Zip Code', 'type'=>'text', 'required', 'div' => array('class' => 'required'))); ?>
										   
										  </li>
										  
										 
										  
										  <li>
										<?php echo $this->Form->file('image',array('label'=>'Profile Image', 'type'=>'text')); ?>
										  </li>
										   <li><?php 	echo $this->Country->select('country', array('label'=>'Selct your Country')); ?></li>
										   
										   <li>
											<?php echo $this->Form->end(__('Update')); ?>
										   </li>
										  
										   
										  
										 
										 </ul>
										  </fieldset>
                                       </div>
									    
									   			
												
													       
								   </div>
								   					
                         </div>
				<div class="content_rgt2">
						<div class="content_rgt2">
						<div class="ac_list_hd">New<span class="span4">Looks</span></div>
				
                  <div class="ac_list">
				  
                    <ul>
					<?php foreach($userLooks as $mlook){?>
                      <li>
                        <div class="div_pic1"><a href="#"><?php echo $this->Html->image('Looks/home/'.$mlook['Look']['image']);?></a></div>
                          <div class="list_txt">
						     <div class="txt5"><?php echo $mlook['Look']['caption_name']; ?></div>
							    <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
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
							    <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
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
							    <div class="ul_txt"><span class="labl"><?php echo $like['User']['name']; ?></span><span>999</span><span><img src="../img/like.png" /></span></div>
						</div>
                      </li>
					   <?php } ?>
                     
                    </ul>
					
							
                  </div>
                  <div class="more1">Load More...</div>
                </div>
                  <div class="more1">Load More...</div>
                </div>
					
        
        <div class="clear"></div>
        </div>
   
   </div>


</body>
</Html>
