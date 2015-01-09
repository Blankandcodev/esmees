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
                <div class="prtflo_div">
                  <div class="div_bck">
                    <div class="div_img"><a href="#"><img src="../img/img17.png" /></a></div>
                    <div class="txt6"><a href="#">Back</a></div>
                  </div>
                  <div class="div2">
                    <div class="txt7">Purchase Items</div>
                    <div class="div3">
                    
                     <div class="content">
                      <div class="content_left2">		
                        <div class="category_sec2">
                     <ul>
						 
						 <?php foreach($orders as $order){?>
                       <li>
                       	<div class="div_pic3">
							<?php echo '<a href="#"><img width=100%  src="'. $order['Product']['image_url'].'" ></a>' ?>
                         <div class="div_pic4">
					
                        </div>
                        </div> 
                        <?php echo $this->Html->link('Upload Look Image here', array('controller' => 'Users', 'action' => 'upload_lookimage',  $order['Order']['order_id']));?> <span><span>
                       </li>
					  <?php } ?>
                        
                     </ul>
                   
                   </div>
                   </div>
                        
                    	 <div class="content_rgt5">
                 
                  <div class="list_4">
                    <ul>
					<?php foreach($memberImages as $mlook){?>
                      <li>
                        <div class="div_pic2"><a href="#"><?php echo $this->Html->image('Looks/big/'.$mlook['Look']['image']);?></a></div>
                        <div class="list2_txt">
                         <div class="port_txt3">
                           <div class="port_txt"><img src="../img/img_edit.png" />
						   <?php echo $this->Html->link('edit', array('controller' => 'Users', 'action' => 'edit_lookimage',  $mlook['Look']['id']));?>
						   <span><img src="../img/cros.png" /><?php echo $this->Html->link('delete', array('controller' => 'Users', 'action' => 'delete_lookimage',  $mlook['Look']['id']),null, 'Are you sure?');?> <img src="img/portfolio_icon.png" /></span> </div>
                          </div> 
                           <div class="port_txt2"><?php echo $mlook['Look']['caption_name']; ?></div>
                        
                        </div>
                      </li>
					    <?php } ?>
                       <li>
                       
                      </ul>
                
                
                
            
            
            </div>
                       
                          
                       </div>
                       </div>
                    
                    </div>
                  </div>
                
                </div>
                
                
                
                
            
            
            </div>
            
        <div class="clear"></div>
        </div>
   
   </div>


</body>
</html>
