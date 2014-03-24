<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_products'), array('class'=>'add')); ?>">Add More Products</a>
	<h1 class="title">All Products</h1>
</div>
<div class="addproduct">
	<h2 class="subtitle">Search Product</h2>
	<?php 
	
		
			echo $this->Form->create('product_fetch');
			
			echo $this->Form->input('keyword', array( 'label'=>'Keywords ','type' => 'text','placeholder'=>'Product Search wise name/sku/merchant/mfg..' , 'class'=>'required'));
			
			
			echo $this->Form->submit('Search', array('class'=>'button primary left'));
		?>
	<?php echo $this->Form->end(); ?>
</div>


<div class="paginate">
</div>



<table class="dtable" cellspacing="0"> 
<thead> 
	<tr> 
		 
		<th>Product Image</th> 
		<th width="150">
		<?php
			echo $this->Paginator->sort('name','name',array('escape' => false));
		?>
		</th> 
		<th width="150">
		<?php
			echo $this->Paginator->sort('sku','SKU',array('escape' => false));
		?>
		</th> 
		<th>
		<?php
			echo $this->Paginator->sort('price','Price',array('escape' => false));
		?>
		
		</th> 
		<th>
			<?php
			echo $this->Paginator->sort('sale_price','Sale Price',array('escape' => false));
		?>
		
		</th>
		<th>
		
		<?php
			echo $this->Paginator->sort('advertiser_id','MERCHANT ID',array('escape' => false));
		?>
		
		
		</th>
		<th>
		
		<?php
			echo $this->Paginator->sort('advetiser_name','<em>MERCHANT Name</em>',array('escape' => false));
		?>
		
		</th>
		
		
		<th width="140">Actions</th> 
	</tr> 
</thead> 
<?php foreach ($products as $product): ?>

<tr>
   
	<td><?php echo '<img src="'. $product['Product']['image_url'].'" width=100 height=100>' ?></td>
	<td width="150"><?php echo  $product['Product']['name']; ?></td>
	<td width="150"><?php echo  $product['Product']['sku']; ?></td>
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