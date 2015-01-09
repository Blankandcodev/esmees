<div class="title-row">
	
	<h1 class="title">View all Signature Order</h1>
</div>
<div class="addproduct">
	<h2 class="subtitle">Search Orders</h2>
	<?php 
	
		
			echo $this->Form->create('product_fetch');
			
			echo $this->Form->input('keyword', array( 'label'=>'Keywords ','type' => 'text','placeholder'=>'Order Search wise order No/sku/merchant/mfg..' , 'class'=>'required'));
			
			
			echo $this->Form->submit('Search', array('class'=>'button primary left'));
		?>
	<?php echo $this->Form->end(); ?>
</div>


<div class="paginate">
</div>

<?php if(!empty($products)){ ?>

<table class="dtable" cellspacing="0"> 
<thead> 
	<tr> 
		 
		
		<th width="150">
		<?php
			echo $this->Paginator->sort('member_id','Member ID',array('escape' => false));
		?>
		</th> 
		<th width="150">
		<?php
			echo $this->Paginator->sort('adv_id','Merchant ID',array('escape' => false));
		?>
		</th> 
		<th>
		<?php
			echo $this->Paginator->sort('merchant_name','Merchant Name',array('escape' => false));
		?>
		
		</th> 
		<th width="150">
			<?php
			echo $this->Paginator->sort('order_id','Order ID',array('escape' => false));
		?>
		
		</th>
		<th width="150">
		
		<?php
			echo $this->Paginator->sort('transaction_date','Transaction date',array('escape' => false));
		?>
		
		
		</th>
		
		<th>
		
		<?php
			echo $this->Paginator->sort('sku_number','SKU Number',array('escape' => false));
		?>
		
		</th>
		<th>
		
		<?php
			echo $this->Paginator->sort('sales','sales',array('escape' => false));
		?>
		
		</th>
		<th>
		
		<?php
			echo $this->Paginator->sort('quantity','Quantity',array('escape' => false));
		?>
		
		</th>
		
		<th>
		
		<?php
			echo $this->Paginator->sort('commissions','commissions',array('escape' => false));
		?>
		
		</th>
		
		
		
		
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
	
	
	
</tr>
<?php endforeach; ?>
</table>
<?php }else{
		echo '<div class="flash">No matching records found!</div>';
	} ?>
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