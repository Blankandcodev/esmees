<div class="users form">
<pre>
<?php echo $this->Form->create('product_fetch');?>


    <fieldset>
	
        <legend><?php echo __('Search Product'); ?></legend>
		

<?php
		
		echo $this->Form->input('adv_id', array('options' => $advList, 'label'=>'Select Advertiser Name '));
		

?>
<?php
       echo $this->Form->input('keywords', array( 'label'=>'keyword ','type' => 'text'));
 ?>

 
<?php
		echo $this->Form->input('category', array( 'label'=>'Category ','type' => 'text'));
?>
 

<?php
       echo $this->Form->input('cur', array( 'label'=>'Currency','type' => 'text'));
 ?>
 
 
<?php
       echo $this->Form->input('record', array( 'label'=>'Records-per-page','type' => 'text'));
 ?>
 
    </fieldset>
<?php echo $this->Form->end(__('Search Product')); ?>



</div>


<div class="users form">




<?php
if(isset($products)){
$allProducts = $products['products']['product'];



foreach($allProducts as $_product){
	
	$imageUrl = (!empty($_product['image-url'])) ? $_product['image-url'] : '';
	$name = (!empty($_product['name'])) ? $_product['name'] : '';
	$description = (!empty($_product['description'])) ? $_product['description'] : '';
	$price = (!empty($_product['price'])) ? $_product['price'] : '';
	$sku = (!empty($_product['sku'])) ? $_product['sku'] : '';
	$upc = (!empty($_product['upc'])) ? $_product['upc'] : '';
	$retailprice = (!empty($_product['retail-price'])) ? $_product['retail-price'] : '';
	$saleprice = (!empty($_product['sale-price'])) ? $_product['sale-price'] : '';
	$aid = (!empty($_product['a-id'])) ? $_product['a-id'] : '';
	$manufacturersku = (!empty($_product['manufacturer-sku'])) ? $_product['manufacturer-sku'] : '';
	$currency = (!empty($_product['currency'])) ? $_product['currency'] : '';
	$buyurl = (!empty($_product['buy-url'])) ? $_product['buy-url'] : '';
	$advertisername = (!empty($_product['advertiser-name'])) ? $_product['advertiser-name'] : '';
	$advertiserid = (!empty($_product['advertiser-id'])) ? $_product['advertiser-id'] : '';
	$advertisercategory = (!empty($_product['advertiser-category'])) ? $_product['advertiser-category'] : '';
	$instock = (!empty($_product['in-stock'])) ? $_product['in-stock'] : '';
	$isbn = (!empty($_product['isbn'])) ? $_product['isbn'] : '';
	$manufacturername = (!empty($_product['manufacturer-name'])) ? $_product['manufacturer-name'] : '';
	$price = (!empty($_product['price'])) ? $_product['price'] : '';
	 ?>
	<?php echo $this->Form->create('add_product', array('url'=>array('controller'=>'admin', 'action'=>'add_product')));?>
	
    <fieldset>
		
		
		
		
	
        <legend></legend>
			
			
			<div class="product"></div>
			  <div class="content_pr2">
				  	  <div class="ul_hd"><b></b></div>
                		 <div class="list7_a">
							
							 
								
								 
								 
								 <table width="100%" >
								 <tr>
								 <td>
									<div class="div_pic1"><img width="100" src="<?php echo $imageUrl; ?>"  /></div>
								 </td>
									
								 <td>
										<?php echo $name ;?>
								  </td>
										
								 <td>
									<?php echo $price ;?>&nbsp<?php echo $currency;?>
								  </td>
								  
								  
								
								 </tr>
								 </table>
							 
							  		
            
			  <div>
			
<?php echo $this->Form->input('name', array('type'=>'hidden', 'value'=> $name )); ?>
<?php echo $this->Form->input('image_url', array('type'=>'hidden', 'value'=>  $imageUrl )); ?>
	

<?php echo $this->Form->input('descrition', array('type'=>'hidden', 'value'=> $description)); ?>


<?php echo $this->Form->input('isbn', array('type'=>'hidden', 'value'=>$isbn)); ?>
<?php echo $this->Form->input('sku', array('type'=>'hidden', 'value'=>$sku)); ?>
<?php echo $this->Form->input('upc', array('type'=>'hidden', 'value'=>$upc)); ?>
<?php echo $this->Form->input('price', array('type'=>'hidden', 'value'=>$price)); ?>



<?php echo $this->Form->input('retail_price', array('type'=>'hidden', 'value'=>$retailprice)); ?>


<?php echo $this->Form->input('sale_price', array('type'=>'hidden', 'value'=>$saleprice)); ?>

<?php echo $this->Form->input('mnf_sku', array('type'=>'hidden', 'value'=>$manufacturername)); ?>
<?php echo $this->Form->input('mnf_sku', array('type'=>'hidden', 'value'=>$manufacturersku)); ?>
<?php echo $this->Form->input('currency', array('type'=>'hidden', 'value'=>$currency)); ?>
<?php echo $this->Form->input('buy_url', array('type'=>'hidden', 'value'=>$buyurl)); ?>
<?php echo $this->Form->input('advetiser_name', array('type'=>'hidden', 'value'=>$advertisername)); ?>
<?php echo $this->Form->input('advertiser_id', array('type'=>'hidden', 'value'=>$advertiserid)); ?>
<?php echo $this->Form->input('category', array('type'=>'hidden', 'value'=>$advertisercategory)); ?>
<?php echo $this->Form->input('ad_id', array('type'=>'hidden', 'value'=>$aid)); ?>
<?php echo $this->Form->input('in_stock', array('type'=>'hidden', 'value'=>$instock)); ?>
<?php echo $this->Form->input('type', array('type'=>'hidden', 'value'=>'0')); ?>
			
			
			
    </fieldset>
		<fieldset>
			<?php

					echo $this->Form->input('parent_id', array('options' => $categoryList, 'label'=>'Select Category Name'));
				
	
			?>
	</fieldset>
	
	<div >
		<?php echo $this->Form->end(__('Add Product')); ?>
	</div>
	
		
		
		<?php } ?>
	
	

<?php };?>
