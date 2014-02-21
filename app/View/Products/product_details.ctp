 <?php foreach ($products as $product): ?>

 <div align="center">
        <div class="container">
            </div>
			
            <div class="content_pr">
			
				<div class="pr_1">
					<div class="ppi_left">
						<div class="ppi_img">
						<?php echo '<a href="'.  $product['buy_url'] .'"><img width=100%  src="'. $product['image_url'].'" ></a>' ?>
						
						 
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
							
							  
							 <a href="<?php echo $product['buy_url'] ?>"><img src="../../img/by_now_btn.png" /></a>
							
							  
							  
							  
							  
							  
							  </div>
						</div>
					
						
						
						<?php echo $this->Html->link($this->Html->image("../img/adt_bnt.png" , array( 'alt' => 'Clear list')), array(
                                                    'controller' => 'Users',
                                                    'action' => 'add_wishlist',
                                                    $product['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						
					 <?php endforeach; ?>
					
					
					
					
					
					
					
					</div>
				</div>
				
            </div> 
				
				  <div class="content_pr2">
				  	  <div class="ul_hd"><b>Who wears this</b></div>
                		 <div class="list7_a">
						 <ul>
								<?php foreach($userLists as $whowear){?>
							  <li>
								<div class="div_pic1">
								
								
								
								<?php echo $this->Html->link($this->Html->image($whowear['Product']['image_url'], array( 'alt' => 'No Image')), array(
                                                    'controller' => 'Products',
                                                    'action' => 'product_details',
                                                    $whowear['Product']['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
								
								
								
							
								
								
								
								
								</div>
								  <div class="list_txt">
								    <div class="txt5"><?php echo $whowear['Product']['name']; ?>
									
									</div>
								      <div class="ul_txt"><span class="labl">
									  <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followers', $whowear['User']['id']),true) ?>"> <?php echo $whowear['User']['name']; ?></a>
									  
									 </span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <?php } ?>
							  </ul>

							
						 </div>	
						 		  <div class="more1">Load More...</div>
              </div>
		   
		   		<div class="content_pr2">
				  	  <div class="ul_hd"><b>Who wears  “Brand Name”</b></div>
                		 <div class="list7_a">
							<ul>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../../img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  		<li>
								<div class="div_pic1"><a href="#"><img src="../../img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  
							  		<li>
								<div class="div_pic1"><a href="#"><img src="../../img/img16.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../../img/img19.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../../img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li style="margin-right:0px;">
								<div class="div_pic1"><a href="#"><img src="../../img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../../img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  		<li>
								<div class="div_pic1"><a href="#"><img src="../../img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  
							  		<li>
								<div class="div_pic1"><a href="#"><img src="../../img/img16.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../../img/img19.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="../../img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li style="margin-right:0px;">
								<div class="div_pic1"><a href="#"><img src="../../img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="../../img/like.png" /></span></div>
									  
								 </div>
							  </li>
                            </ul>
						 </div>	
						 		  <div class="more1">Load More...</div>
              </div>
			  				
        
        <div class="clear"></div>		
   

?>