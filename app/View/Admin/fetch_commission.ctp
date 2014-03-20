<div class="title-row">
	
		
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_adversiters'), array('class'=>'add')); ?>">Generate Commission</a>
	<h1 class="title">View All Commission</h1>

	
</div>

<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Member ID</th> 
    				<th>Merchant ID</th> 
					<th>Merchant Name</th> 
					<th>Order ID</th> 
					<th>Transaction Date</th> 
					<th>Transaction Time</th> 
					<th>SKU Number</th> 
					<th>Sales</th> 
					<th>Quantity</th> 
					<th>Commissions</th> 
					<th>Process Date</th> 
					<th>Process Time</th> 
    				
    				<th>Actions</th> 
				</tr> 
			</thead> 
				


    <?php foreach ($commissionList as $comm): ?>
    <tr>
        
        <td><?php echo  $comm['Link']['member_id']; ?></td>
       
		<td><?php echo  $comm['Link']['merchant_id']; ?></td>
		
		<td><?php echo  $comm['Link']['merchant_name']; ?></td>
		<td><?php echo  $comm['Link']['order_id']; ?></td>
		<td><?php echo  $comm['Link']['transaction_date']; ?></td>
		<td><?php echo  $comm['Link']['transaction_time']; ?></td>
		<td><?php echo  $comm['Link']['sku_number']; ?></td>
		<td><?php echo  $comm['Link']['sales']; ?></td>
		<td><?php echo  $comm['Link']['quantity']; ?></td>
		<td><?php echo  $comm['Link']['commissions']; ?></td>
		<td><?php echo  $comm['Link']['process_date']; ?></td>
		<td><?php echo  $comm['Link']['process_time']; ?></td>
        
        <td>
        <?php echo $this->Html->link('Edit', array('action'=>'edit_adversiters',  $comm['Link']['id']), array('class'=>'edit'));?> 
        <?php echo $this->Html->link('Delete', array('action' => 'delete_adversiters',  $comm['Link']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>

        </td>
    </tr>
    <?php endforeach; ?>

</table>




