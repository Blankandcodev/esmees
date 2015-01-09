<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_products'), array('class'=>'add')); ?>">Add More Products</a>
	<h1 class="title"> View All Products not-available in your database</h1>
</div>


<div class="paginate">
</div>

<?php if(!empty($products)){ ?>

<table class="dtable" cellspacing="0"> 
<thead> 
	<tr> 
		 
		
		<th  width="100" >
			Member ID
		</th> 
		<th  width="100">
		Merchant ID
		</th> 
		<th width="150">
		Merchant Name
		</th> 
		<th width="150">
		Order ID
		
		</th>
		<th width="150">
			Tran date
		</th>
		
		<th>
			 SKU
		</th>
		
		<th>
			Sales
		</th>
		
		<th>
			Quantity
		</th>
		
		<th>
			Commissions
		</th>
		
		
		<th width="140">Actions</th> 
	</tr> 
</thead> 
<?php foreach ($products as $product): ?>

<tr>
   
	
	<td width="150"><?php echo  $product['Lsorder']['member_id']; ?></td>
	<td width="150"><?php echo  $product['Lsorder']['adv_id']; ?></td>
	
	<td><?php echo  $product['Lsorder']['merchant_name']; ?></td>
	<td><?php echo  $product['Lsorder']['order_id']; ?></td>
	
	<td><?php echo  $product['Lsorder']['transaction_date']; ?></td>
	<td><?php echo  $product['Lsorder']['sku_number']; ?></td>
	
	<td>$<?php echo  $product['Lsorder']['sales']; ?></td>
	<td><?php echo  $product['Lsorder']['quantity']; ?></td>
	
	<td>$<?php echo  $product['Lsorder']['commissions']; ?></td>

	
	
	<td>
	
	<?php echo $this->Form->create('fetch_reports');?>
	
   <?php echo $this->Form->input('sdate', array( 'type'=>'hidden',
   'value'=> $product['Lsorder']['transaction_date']));?>
	<?php echo $this->Form->input('edate', array('type'=>'hidden',
	'value'=> $product['Lsorder']['transaction_date']));?>
	
	<?php echo $this->Form->Submit('Product Details',array('class'=>'button primary left')); ?>
	
	
	<?php echo $this->Form->end(); ?>
	
	
	
	
	

	</td>
</tr>
<?php endforeach; ?>
</table>
<?php }else{
		echo '<div class="flash">No matching records found!</div>';
	} ?>
		</div>

