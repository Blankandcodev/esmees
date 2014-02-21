
   <div align="center">
        <div class="container">

            <div class="content_fwd">
               
                <div class="content_flwd">
					<div class="bk"><span><a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img src="../img/arw.png" /></a></span>Back </div>
					
						
					
					<div class="cntnt_fwd_main">
						<div class="lft_hd">Order Details</div>
							 <div class="rt_head"></div>
					</div>
				
                 
                  <div class="list4">
                    
					
					<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
					<th> Product Image </th> 
					<th> Product Name </th>
    				<th>Order ID</th> 
					<th>Amount</th> 
					<th>Order Date</th> 
    				
    				
    				<th>Manage Looks</th> 
				</tr> 
			</thead> 
			<tbody> 
				


    <?php foreach ($orderList as $order): ?>
	<tbody> 
    <tr>
        <td>
		
	
		<div class="div_pic1">
						<?php echo $this->Html->link($this->Html->image($order['Product']['image_url'], array( 'width' => '50')), array(
                                                    'controller' => 'Products',
                                                    'action' => 'product_details',
                                                   $order['Order']['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						</div>
		</td>
      
        <td><?php echo  $order['Product']['name']; ?>
		
		</td>
	    <td><?php echo  $order['Order']['order_id']; ?></td>
		<td><?php echo  "$ 100 " ?></td>
		<td><?php echo  "20-feb-2014" ?></td>
		
		
        
        <td>
		 
		<?php echo $this->Html->link('Add New Look', array('controller' => 'Users', 'action' => 'upload_lookimage',  $order['Order']['order_id']));?> |
		<?php echo $this->Html->link('View Look', array('controller' => 'Users', 'action' => 'view_newlooks',  $order['Order']['order_id']));?>
		

        </td>
    </tr>
	</tbody>
    <?php endforeach; ?>

</table>
					
					
					
					
					
					
					
					                
                  </div>
                
                </div>
                
                
                
                
            
            
            </div>
           
        
        <div class="clear"></div>
        </div>
   
   </div>


