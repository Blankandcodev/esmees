<?php 
foreach($orders as $order){
	//Debug($order);
	$order_detail = $order['Order'];
	$order_user = $order['User'];
	$order_item = $order['Product'];
	$user_look = $order['Look'];
	
	
	
	
	//echo "================================<br>";
	//print_r($order_detail['user_id']);
	//echo "<br>";
	//print_r($order_user['name']);
	//echo "<br>";
	//print_r($order_item['name']);
	//echo "<br>";
	//echo "================================<br>";
	//echo "================================<br>";
}
?>
<div align="center">
        <div class="container">
      
               
            <div class="content">
					<div class="bk"><span><a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img src="../img/arw.png" /></a></span>Back </div>
						
					
					<div class="cntnt_fwd_main">
						<div class="lft_hd">Purchase Items</div>
							 <div class="rt_head"></div>
					</div>
						 <?php foreach ($orders as $order): ?>
						<div class="ma_right">
							<div class="mc_prf">
								<div class="mc_prf_hd">Product Picture</div>
									<div class="img_main">
										<div class="prf_img"><?php echo '<a href="'. $order_item['buy_url'] .'"><img width=100%  src="'. $order['Product']['image_url'].'" ></a>' ?></div>
											<div class="img_dwn_main">
											  <div class="img_ed"><img src="../img/img_edit.png" /><span>edit</span></div>
											  	 <div class="img_ed2"><img src="../img/cros.png" /><span>delete</span></div>
											</div>  
									</div>	
							</div>
								<div class="ac_left">
								   <div class="ac_txt_main"><div class="ac_hd">Product Info<span>
								   
								   </span></div></div>
									
									
									   <div class="account_sec">
										 <ul>
										<li>
										
      
      
										   <li>Product Name :<?php echo  $order['Product']['name']; ?>   </li>
										   <li>Price:  <?php echo  $order['Product']['price']; ?>  </li>
										   <li>Sku :<?php echo  $order['Product']['sku']; ?></a></li>
										   <li>Date:<?php echo  $order['Order']['order_date']; ?> </li>
										  
										
										 <li>
										
										 </li>
										 </ul>
                                       </div>
									    
									   			<div class="ac_rt_txt">
											
														
														
							<?php echo $this->Form->create('Look', array('type'=>'file','action' => 'upload_image'));  ?>
														<?php echo $this->Form->Hidden('order_id', array('value' => $order['Order']['order_id']));?>
														
												
														
														
														
														<?php echo $this->Form->Hidden('user_id', array('value' => $order['Order']['user_id']));?>
														
															<?php echo $this->Form->Hidden('product_id', array('value' => $order['Order']['product_id']));?>
														<div class="module_content">
							
														 <?php
																 echo $this->Form->input('caption_name', array('label'=>'Caption Name', 'type'=>'text', 'required', 'div' => array(
																	'class' => 'required'
																)));
															?>
															
															<?php echo $this->Form->file('image', array('class'=>'required')); ?>
															</fieldset>
															<?php echo $this->Form->end(__('Upload Image')); ?>

											
												
													
												</div>
													
												
												
												
													       
								   </div>
								   <div class="content_rgt2">
						<div class="ul_hd"><b>NewLooks</b></div>
                		 <div class="list7_a">
							<ul>
								<?php foreach($memberImages as $mlook){?>
							  <li>
								<div class="div_pic1"><a href="#"><?php echo $this->Html->image('Looks/big/'.$mlook['Look']['image']);?></a></div>
								  <div class="list_txt">
								    <div class="txt5"><?php echo $mlook['Look']['caption_name']; ?>
									
									</div>

									  
								 </div>
							  </li>
							  <?php } ?>
							  </ul>

						 </div>	
						
                
                </div>
								   					
                         </div>
					
				  <?php endforeach; ?>
				
					
        
        <div class="clear"></div>
        </div>
   
   </div>

