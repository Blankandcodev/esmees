

   <div align="center">
        <div class="container">
         
            <div class="content_pr">
				<div class="pr_1">
					<div class="pr_left">
						<div class="pr_img"><?php echo $this->Html->image('Users/home/'.$user['image']);?></div>
							<div class="pr_mn">
							<div class="pr_txt"><span class="labl">Username:</span><span><?php echo  $user['name']; ?></span>
								
							<?php echo $this->Form->create('User');?>
							
   
								<?php echo $this->Form->Hidden('user_id', array('value' => $user['id']));?>
								

								<?php
								$options=array('type'=>'Make secure payment', 'type'=>'submit', 'style'=>'width:30px; height:30px; display:block; margin-left:auto; margin-right:auto;');
								echo $this->Form->end('Follow Me',$options);

								?>
								
								
								
								
								
								
								
							
							</div>
							</div>
								<div class="pr_mn">
									<div class="pr_txt"><span class="labl"><i>Follower:</span></i><span><?php echo $totalUser ?></span></div>
								</div>
									<div class="pr_mn">
										<div class="pr_txt"><span class="labl"><i>Like:</span></i><span>999,999,999</span></div>
									</div>
										<div class="flw_btn">
											<?php echo $this->Html->link($this->Html->image("../img/follw_btn.png" , array( 'alt' => 'Clear list')), array(
                                                    'controller' => 'Users',
                                                    'action' => 'followers',
                                                    $user['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
										
										
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
							<ul>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  		<li>
								<div class="div_pic1"><a href="#"><img src="../img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  
							  		<li>
								<div class="div_pic1"><a href="#"><img src="../img/img16.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../img/img19.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								    <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li style="margin-right:0px;">
								<div class="div_pic1"><a href="#"><img src="../img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								    <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								    <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  		<li>
								<div class="div_pic1"><a href="#"><img src="../img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								    <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  
							  		<li>
								<div class="div_pic1"><a href="#"><img src="../img/img16.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../img/img19.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								    <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								   <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li style="margin-right:0px;">
								<div class="div_pic1"><a href="#"><img src="../img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  		<li>
								<div class="div_pic1"><a href="#"><img src="../img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  
							  		<li>
								<div class="div_pic1"><a href="#"><img src="../img/img16.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../img/img19.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li style="margin-right:0px;">
								<div class="div_pic1"><a href="#"><img src="../img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							</ul>
						 </div>	
						 		  <div class="more1">Load More...</div>
              </div>
		   
		   				<div class="content_pr2">
				  	  <div class="ul_hd"><b>People who follow me...</b></div>
                		 <div class="list8">
							<ul>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img24.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img24.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li style="margin-right:0px;">
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img24.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img24.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li style="margin-right:0px;">
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img24.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img24.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li style="margin-right:0px;">
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img24.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							   <li>
								<div class="div_pic5"><a href="#"><img src="../img/img24.png" /></a></div>
							  </li>
							  <li>
								<div class="div_pic5"><a href="#"><img src="../img/img22.png" /></a></div>
							  </li>
							   <li style="margin-right:0px;">
								<div class="div_pic5"><a href="#"><img src="../img/img23.png" /></a></div>
							  </li>
							 </ul> 		
						 		  <div class="more1">Load More...</div>
              </div>
		   
		   
        
        <div class="clear"></div>
        </div>
   
   </div>
   
</div>

</body>
</html>
