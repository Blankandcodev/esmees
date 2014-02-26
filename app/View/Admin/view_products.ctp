<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_products'), array('class'=>'add')); ?>">Add More Products</a>
	<h1 class="title">All Products</h1>
</div>

<div class="paginate">
<?php	
echo $this->Paginator->numbers(array(
  //'modulus' => 4,   /* Controls the number of page links to display */
  'first' => '< First',
  'last' => 'Last >',
  'separator'=>'</li><li>',
  'before' => '<ul><li>', 'after' => '</li></ul>')
);
?>
</div>

<table class="dtable" cellspacing="0"> 
<thead> 
	<tr> 
		 
		<th>Product Image</th> 
		<th>Product Name</th> 
		<th>Price</th> 
		<th>Sale Price</th>
		<th>Advertiser ID</th>
		<th>Advertiser Name</th>
		
		
		<th width="140">Actions</th> 
	</tr> 
</thead> 
<?php foreach ($products as $product): ?>
<tr>
   
	<td><?php echo '<img src="'. $product['Product']['image_url'].'" width=100 height=100>' ?></td>
	<td><?php echo  $product['Product']['name']; ?></td>
	<td><?php echo  $product['Product']['price']; ?></td>
	<td><?php echo  $product['Product']['sale_price']; ?></td>
	<td><?php echo  $product['Product']['advertiser_id']; ?></td>
	<td><?php echo  $product['Product']['advetiser_name']; ?></td>
	
	<td>
	<?php echo $this->Html->link('Edit', array('action'=>'edit_product',  $product['Product']['id']), array('class'=>'edit'));?>
	<?php echo $this->Html->link('Delete', array('action' => 'delete_product',  $product['Product']['id']), array('class'=>'delete-btn'), 'Are you sure want to delete ?' )?>
	

	</td>
</tr>
<?php endforeach; ?>
</table>