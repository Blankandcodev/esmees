
   <div align="center">
        <div class="container">
        
            <div class="content_fwd">
               <div class="pgm_bnr">
			   	<div class="pgm_bnr2"> <img src="../img/pgm_bnr.png" /></div>
					<div class="bnr_rt">
						<div class="bnr_hd">Shop by Hot Products</div>
							<div class="bnr_p">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are , you need to be sure there isn't anything embarrassing hidden in the middle of text.</div>
						<div class="brnd"><img src="../img/ht_bnr.png" /></div>
							<div class="by_nw_btn"><a href="#"><img src="../img/by_nw_btn.png" /></a></div>
						</div>
			   </div>
			   		<div class="pgm_cntnt2">
						<div class="trnd_hd">
						    <div class="txt_lft">#TREND<span class="span2">Setters</span></div>
									<a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'gallery'),true) ?>"><div class="trnd_txt_rt"><i>View all</i></div></a>
						</div>
								<div class="list5">
									<ul>
								<?php foreach ($looks as $look): ?>
									  <li>
										<div class="div_pic1">
												<?php
						
												
 echo $this->Html->link($this->Html->image('Looks/big/'.$look['Look']['image']), array(
                                                    'controller' => 'Looks',
                                                    'action' => 'detail',
                                                    $look['Look']['product_id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						
						
										<div class="list_txt">
										   
										</div>
									  </li>
							<?php endforeach; ?>
									  <li>
										
									</ul>
                          </div>
						  		<div class="trnd_hd">
						    <div class="txt_lft">#NewOnThe<span class="span2">Web</span></div>
									<a href="<?php echo $this->Html->url(array('controller'=>'products', 'action'=>'all_product_gallery'),true) ?>"><div class="trnd_txt_rt"><i>View all</i></div></a>
						</div>
								<div class="list5">
									<ul>
										<?php foreach ($products as $product): ?>
									  <li>
										<div class="div_pic1">
										<?php echo $this->Html->link($this->Html->image($product['Product']['image_url'], array( 'alt' => 'Clear list')), array(
                                                    'controller' => 'Products',
                                                    'action' => 'product_details',
                                                    $product['Product']['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
										</div>
										  <div class="list_txt">
										   <div class="txt5">
													
										    <?php echo $this->Text->truncate($product['Product']['name'],10,	array('ellipsis' => '...','exact' => 'false')); ?>
										   </div>
										    
										     <div class="txtt5">$<?php echo  $product['Product']['price']; ?></div>
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


