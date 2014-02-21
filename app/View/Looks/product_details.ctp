<?php 
foreach($userlooklists as $userlook){
	//Debug($order);
	$user_look = $userlook['Look'];
	print_r($user_look);
	$user_details = $userlook['User'];
	$product_details = $userlook['Product'];
	
	
	
	
	
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
            </div>
			
            <div class="content_pr">
			
				<div class="pr_1">
				 <?php foreach ($looks as $look): ?>
					<div class="ppi_left">
						<div class="ppi_img">
						<?php
		echo $this->Html->image('Looks/big/'.$look['Look']['image'], array('width'=>'100%'));?>
		
						</div>
						  
					</div>
						
				    	<div class="ppi_rt">
						  <div class="ppi_mn">
							<div class="ppi_txt"><i>Brand Name</i></div>
								<div class="ppi_txt"><?php echo $look['Product']['name']; ?></div>
                                  <div class="cst_div">$<?php echo $look['Product']['price']; ?></div>
							    	<div class="ppi_txt2">Detail</div>
										<div class="ppi_txt3">
										<?php echo	$look['Product']['descrition'];?>
										
										</div>
								
						  </div>
							  <div class="ppi_btn">
							  
							 <?php echo '<a href="'.$look['Product']['buy_url'] .'"><img src="../../img/by_now_btn.png" /></a>' ?>
							  <a href="#"></a></div>
						</div>
					 <?php endforeach; ?>
					<div class="ppi_btn2"><a href="#"><img src="../../img/adt_bnt.png" /></a></div>
				</div>
				
            </div> 
				
				  <div class="content_pr2">
				  	  <div class="ul_hd"><b>Who wears this</b></div>
                		 <div class="list7_a">
						 
							<ul>
								 
							  <li>
							
								<div class="div_pic1"><a href="#">
								<?php echo	$userlook['caption_name'];?>
								</a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="images/like.png" /></span></div>
									  
								 </div>
							  </li>
							  
							  		<li>
								<div class="div_pic1"><a href="#"><img src="img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  
							  		<li>
								<div class="div_pic1"><a href="#"><img src="img/img16.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img19.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li style="margin-right:0px;">
								<div class="div_pic1"><a href="#"><img src="img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  		<li>
								<div class="div_pic1"><a href="#"><img src="img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  
							  		<li>
								<div class="div_pic1"><a href="#"><img src="img/img16.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img19.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li style="margin-right:0px;">
								<div class="div_pic1"><a href="#"><img src="img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
                            </ul>
						
						 </div>	
						 		  <div class="more1">Load More...</div>
              </div>
		   
		   		<div class="content_pr2">
				  	  <div class="ul_hd"><b>Who wears  “Brand Name”</b></div>
                		 <div class="list7_a">
							<ul>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								     <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  		<li>
								<div class="div_pic1"><a href="#"><img src="img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  
							  		<li>
								<div class="div_pic1"><a href="#"><img src="img/img16.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img19.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li style="margin-right:0px;">
								<div class="div_pic1"><a href="#"><img src="img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  		<li>
								<div class="div_pic1"><a href="#"><img src="img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  
							  		<li>
								<div class="div_pic1"><a href="#"><img src="img/img16.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img19.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li>
								<div class="div_pic1"><a href="#"><img src="img/img15.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
							  <li style="margin-right:0px;">
								<div class="div_pic1"><a href="#"><img src="img/img14.png" /></a></div>
								  <div class="list_txt">
								    <div class="txt5">Caption....................</div>
								      <div class="ul_txt"><span class="labl">Username</span><span>999</span><span><img src="img/like.png" /></span></div>
									  
								 </div>
							  </li>
                            </ul>
						 </div>	
						 		  <div class="more1">Load More...</div>
              </div>
			  				
        
        <div class="clear"></div>		
   

