<div class="users form">


<article class="module width_full">
			<header><h3>View all Products in Link Share</h3></header>
			
			<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			
</div>
<?php $allProducts = $products['item'];
foreach($allProducts as $_product)
{ ?>

	<?php echo $this->Form->create('Product'); ?>
	
    <fieldset>
		
	
        <fieldset>
		
	
        <legend></legend>
		<?php echo $this->Form->input('name', array('label'=>'Product Name', 'type'=>'text', 'value'=>$_product['productname'])); ?>
		<?php echo $this->Form->input('descrition', array('label'=>'Product Description', 'type'=>'textarea', 'value'=>$_product['description'])); ?>
		<?php echo $this->Form->input('price', array('label'=>'Product Price', 'type'=>'text', 'value'=>$_product['price'])); ?>
		
		<?php echo $this->Form->input('sale_price', array('label'=>'Product Sale Price', 'type'=>'text', 'value'=>$_product['saleprice'])); ?>
		
		<?php echo $this->Form->input('sku', array('label'=>'Product SKU', 'type'=>'text', 'value'=>$_product['sku'])); ?>
		
		
		
		<?php echo $this->Form->input('ad_id', array('label'=>'Link ID', 'type'=>'text', 'value'=>$_product['linkid'])); ?>
	
		
		<?php echo $this->Form->input('advertiser_id', array('label'=>'Merchant ID', 'type'=>'text', 'value'=>$_product['mid'])); ?>
		
		<?php echo $this->Form->input('advetiser_name', array('label'=>'manufacturer name', 'type'=>'text', 'value'=>$_product['merchantname'])); ?>
		
		
		<?php echo $this->Form->input('buy_url', array('label'=>'Product Url', 'type'=>'text', 'value'=>$_product['linkurl'])); ?>
		<?php echo $this->Form->input('image_url', array('label'=>'Image Url', 'type'=>'text', 'value'=>
		$_product['imageurl'])); ?>
		
		<div class="product"><img width="300" src="<?php echo $_product['imageurl'] ?>" width=200 /></div>
		
		
    </fieldset>
	
		
		
    </fieldset>
	
	<div align='right' style='margin-right:10'>
		
		<?php echo $this->Form->end(__('Add Product')); ?>
	</div>
	
	

<?php }; ?>
