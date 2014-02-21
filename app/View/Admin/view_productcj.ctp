<div class="users form">
<fieldset>
 <legend>View Product In Commission Junction</legend>
<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Product Image</th> 
    				<th>Product Name</th> 
    				<th>Price</th> 
					<th>Sale Price</th>
					<th>Advertiser ID</th>
					<th>Advertiser Name</th>
					
					
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				


    <?php foreach ($products as $product): ?>
	<tbody> 
    <tr>
       
		<td><?php echo '<img src="'. $product['Product']['image_url'].'" width=100 height=100>' ?></td>
        <td><?php echo  $product['Product']['name']; ?></td>
		<td><?php echo  $product['Product']['price']; ?></td>
		<td><?php echo  $product['Product']['sale_price']; ?></td>
		<td><?php echo  $product['Product']['advertiser_id']; ?></td>
		<td><?php echo  $product['Product']['advetiser_name']; ?></td>
		
		<td>
		<?php echo $this->Html->link('Edit', array('action'=>'edit_cjproduct',  $product['Product']['id']));?> | 
		<?php echo $this->Html->link('Delete', array('action' => 'delete_cjproduct',  $product['Product']['id']), null, 'Are you sure want to delete ?' )?>
        

        </td>
    </tr>
	</tbody>
    <?php endforeach; ?>

</table>
</fieldset>
</div>
