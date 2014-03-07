<table class="dtable">
<thead>
<tr>
	<th width="50">MerchantID</th>
	<th>Member ID</th>
	<th>Order ID</th>
	<th>Commission Amount</th>
	<th width="50">Date</th>
	<th width="50">V. Date</th>
</tr>
</thead>
<?php foreach($commissionList as $comm){
	
	?>
	<tr>
		<td><?php echo $comm['Commission']['adversiter_id'] ;?></td>
		<td><?php echo $comm['Commission']['order_id'] ;?></td>
		<td><?php echo $comm['Commission']['order_id'] ;?></td>
		<td><?php echo $comm['Commission']['commission_amount'] ;?></td>
		 <td><?php echo $comm['Commission']['g_date'] ;?></td>
		  <td><?php echo $comm['Commission']['v_date'] ;?></td>
		
		
	</tr>
<?php } ?>
</table>