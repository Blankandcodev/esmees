<div class="users form">



<article class="module width_full">
			<header><h3>View all Products in Commission Junction</h3></header>
			<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			
</div>


<?php $allProducts = $products['products']['product'];

foreach($allProducts as $_product)

{ ?>

	<?php echo $this->Form->create('Product'); ?>
	
    <fieldset>
		
	
        <legend></legend>
		<?php echo $this->Form->input('name', array('label'=>'Product Name', 'type'=>'text', 'value'=>$_product['name'])); ?>
		<?php echo $this->Form->input('descrition', array('label'=>'Product Description', 'type'=>'textarea', 'value'=>$_product['description'])); ?>
		<?php echo $this->Form->input('price', array('label'=>'Product Price', 'type'=>'text', 'value'=>$_product['price'])); ?>
		<?php echo $this->Form->input('retail_price', array('label'=>'Product Retail Price', 'type'=>'text', 'value'=>$_product['retail-price'])); ?>
		<?php echo $this->Form->input('sale_price', array('label'=>'Product Sale Price', 'type'=>'text', 'value'=>$_product['sale-price'])); ?>
		<?php echo $this->Form->input('currency', array('label'=>'Currency', 'type'=>'text', 'value'=>$_product['currency'])); ?>
		<?php echo $this->Form->input('sku', array('label'=>'Product SKU', 'type'=>'text', 'value'=>$_product['sku'])); ?>
		<?php echo $this->Form->input('sku', array('label'=>'Product SKU', 'type'=>'text', 'value'=>$_product['sku'])); ?>
		<?php echo $this->Form->input('upc', array('label'=>'Product UPC', 'type'=>'text', 'value'=>$_product['upc'])); ?>
		<?php echo $this->Form->input('isbn', array('label'=>'Product ISBN', 'type'=>'text', 'value'=>$_product['isbn'])); ?>
		<?php echo $this->Form->input('ad_id', array('label'=>'AD ID', 'type'=>'text', 'value'=>$_product['ad-id'])); ?>
		<?php echo $this->Form->input('advertiser_id', array('label'=>'Advertiser id', 'type'=>'text', 'value'=>$_product['advertiser-id'])); ?>
		<?php echo $this->Form->input('advetiser_name', array('label'=>'Advertiser name', 'type'=>'text', 'value'=>$_product['advertiser-name'])); ?>
		<?php echo $this->Form->input('mnf_name', array('label'=>'manufacturer name', 'type'=>'text', 'value'=>$_product['manufacturer-name'])); ?>
		<?php echo $this->Form->input('mnf_sku', array('label'=>'manufacturer sku', 'type'=>'text', 'value'=>$_product['manufacturer-sku'])); ?>
		
		<?php echo $this->Form->input('buy_url', array('label'=>'Product Url', 'type'=>'text', 'value'=>$_product['buy-url'])); ?>
		<?php echo $this->Form->input('image_url', array('label'=>'Image Url', 'type'=>'text', 'value'=>
		$_product['image-url'])); ?>
		
		<div class="product"><img width="300" src="<?php echo $_product['image-url'] ?>" width=200 /></div>
		<?php echo $this->Form->input('in_stock', array('label'=>'in stock', 'type'=>'checkbox', 'value'=>
		$_product['in-stock'])); ?>
		
    </fieldset>
	
	<div align='right' style='margin-right:10'>
		
		<?php echo $this->Form->end(__('Add Product')); ?>
	</div>
	
	

<?php }; ?>
