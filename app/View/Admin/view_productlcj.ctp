



<article class="module width_full">
			<header><h3>View all Products In Commission Junction</h3></header>
<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Product Image</th> 
    				<th>Product Name</th> 
    				<th>Price</th> 
					<th>Sale Price</th>
					<th>Advertiser ID</th>
					<th>Advertiser Name</th>
					<th>Affiliate Site</th>
					
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
		<td><?php echo '<a href="'. $product['Product']['buy_url'] .'">Buy</a>' ?></td>
		<td>
		<?php echo $this->Html->link('Edit', array('action'=>'',  $product['Product']['id']));?> | 
		<?php echo $this->Html->link('Delete', array('action'=>'',  $product['Product']['id']));?> 
        

        </td>
    </tr>
	</tbody>
    <?php endforeach; ?>

</table>
</article>
