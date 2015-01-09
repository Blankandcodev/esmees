<?php
foreach($orders as $order){
	$order_detail = $order['Order'];
	$order_user = $order['User'];
	$order_item = $order['Product'];
	
	
	
	echo "================================<br>";
	print_r($order_detail['user_id']);
	echo "<br>";
	print_r($order_user['name']);
	echo "<br>";
	print_r($order_item['name']);
	echo "<br>";
	echo "================================<br>";
	echo "================================<br>";
}
?>


<div align="center">
        <div class="container">
      
               
            <div class="content">
					<div class="bk"><span><a href="#"><img src="../img/arw.png" /></a></span>Back </div>
						
					
					<div class="cntnt_fwd_main">
						<div class="lft_hd">Purchase Items</div>
							 <div class="rt_head"></div>
					</div>
						
						<div class="ma_right">
							<div class="mc_prf">
								<div class="mc_prf_hd">Product Picture</div>
									<div class="img_main">
										<div class="prf_img"><?php echo '<a href="'.  $product['Product']['buy_url'] .'"><img width=100%  src="'. $product['Product']['image_url'].'" ></a>' ?></div>
											<div class="img_dwn_main">
											  <div class="img_ed"><img src="../img/img_edit.png" /><span>edit</span></div>
											  	 <div class="img_ed2"><img src="../img/cros.png" /><span>delete</span></div>
											</div>  
									</div>	
							</div>
								<div class="ac_left">
								   <div class="ac_txt_main"><div class="ac_hd">Product Info<span>Upload Image</span></div></div>
									
									
									   <div class="account_sec">
										 <ul>
										
										   <li>Product Name :<?php echo  $order_item['name']; ?>   </li>
										   <li>Price:   </li>
										   <li>Sku :</a></li>
										   <li>Date: </li>
										   <li>State: </li>
										   <li>Gender:</li>
										  
										   <li>Email Address:</li>
										   <li>Paypal Name:</li>
										 
										 </ul>
                                       </div>
									    
									   			<div class="ac_rt_txt"><a href="#"><img src="../img/img_edit.png" /></a></div>
													<div class="ac_rt_txt"><a href="#"><img src="../img/img_edit.png" /></a></div>
														<div class="ac_rt_txt"><a href="#"><img src="../img/img_edit.png" /></a></div>
												
												
												
													       
								   </div>
								   <div class="content_rgt2">
						<div class="ac_list_hd">New<span class="span4">Looks</span></div>
						
                  <div class="more1">Load More...</div>
                </div>
								   					
                         </div>
					
				
				
					
        
        <div class="clear"></div>
        </div>
   
   </div>


</body>
</html>
