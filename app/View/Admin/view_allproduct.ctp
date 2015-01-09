



<article class="module width_full">
			<header><h3>View Product</h3></header>
<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Adversiter ID</th> 
    				<th>Adversiter Name</th> 
    				<th>Affilicate Type</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				


    <?php foreach ($products as $product): ?>
	<tbody> 
    <tr>
        
        <td><?php echo  $product['Product']['ad_id']; ?></td>
        <td><?php echo  $product['Product']['name']; ?></td>
		<td><?php echo  $product['Product']['descrition']; ?></td>
        
        <td>
        <?php echo $this->Html->link('Edit', array('action'=>'edit_adversiters',  $product['Product']['id']));?> | 
        <?php echo $this->Html->link('Delete', array('action' => 'delete_adversiters',  $product['Product']['id']), null, 'Are you sure?' )?>

        </td>
    </tr>
	</tbody>
    <?php endforeach; ?>

</table>
</article>
