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
				


    <?php foreach ($commissionCj as $comm): ?>
    <tr>
      
		<td>
			<?php 
				pr($comm);
			?>
			
		</td>
      
    </tr>
    <?php endforeach; ?>

</table>







