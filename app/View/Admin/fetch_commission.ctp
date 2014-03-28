<div class="title-row">
	
		
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'generate_commissionls'), array('class'=>'add')); ?>">Generate Commission</a>
	<h1 class="title">View All Commission</h1>

	
</div>

<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Member ID</th> 
    				<th>Merc. ID</th> 
					<th>Merc Name</th> 
					<th>Order ID</th> 
					<th>Trans Date</th> 
					<th>Trans Time</th> 
					<th>SKU Number</th> 
					<th>Sales</th> 
					<th>Quantity</th> 
					<th>Commissions</th> 
					<th>Process Date</th> 
					<th>Process Time</th> 
    				
    				
				</tr> 
			</thead> 
				


    <?php foreach ($commissionList as $comm): ?>
    <tr>
        
        <td><?php echo  $comm['Link']['member_id']; ?></td>
       
		<td><?php echo  $comm['Link']['adv_id']; ?></td>
		
		<td><?php echo  $comm['Link']['merchant_name']; ?></td>
		<td><?php echo  $comm['Link']['order_id']; ?></td>
		<td><?php echo  $comm['Link']['transaction_date']; ?></td>
		<td><?php echo  $comm['Link']['transaction_time']; ?></td>
		<td><?php echo  $comm['Link']['sku_number']; ?></td>
		<td><?php echo  $comm['Link']['sales']; ?></td>
		<td><?php echo  $comm['Link']['quantity']; ?></td>
		<td>$<?php echo  $comm['Link']['commissions']; ?></td>
		<td><?php echo  $comm['Link']['process_date']; ?></td>
		<td><?php echo  $comm['Link']['process_time']; ?></td>
        
       
    </tr>
    <?php endforeach; ?>

</table>




