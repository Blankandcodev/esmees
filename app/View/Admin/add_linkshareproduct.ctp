<div class="users form">
<pre>
<?php echo $this->Form->create('product_fetch');?>


    <fieldset>
	
        <legend><?php echo __('Search Product'); ?></legend>
		

<?php
		echo $this->Form->input('adv_id', array('type'=>'select','options' => $advList, 'label'=>'Select Advertiser Name'));
?>
<?php
       echo $this->Form->input('keyword', array( 'label'=>'keyword ','type' => 'text','required', 'div' => array('class' => 'required')));?>
 

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


if($products['TotalMatches']){$allProducts = $products['item'];
foreach($allProducts as $_product){
	$mid= (!empty($_product['mid'])) ? $_product['mid'] : '';
	$merchantname= (!empty($_product['merchantname'])) ? $_product['merchantname'] : '';
	$linkid= (!empty($_product['linkid'])) ? $_product['linkid'] : '';
	$sku= (!empty($_product['sku'])) ? $_product['sku'] : '';
	$productname= (!empty($_product['productname'])) ? $_product['productname'] : '';
	$category= (!empty($_product['category'])) ? $_product['category'] : '';
	$price= (!empty($_product['price'])) ? $_product['price'] : '';
	$upccode= (!empty($_product['upccode'])) ? $_product['upccode'] : '';
	$description= (!empty($_product['description'])) ? $_product['description'] : '';
	$saleprice= (!empty($_product['saleprice'])) ? $_product['saleprice'] : '';
	$linkurl= (!empty($_product['linkurl'])) ? $_product['linkurl'] : '';
	$imageurl= (!empty($_product['imageurl'])) ? $_product['imageurl'] : '';
	$long= (!empty($_product['description']['long'])) ? $_product['description']['long'] : '';
	$short= (!empty($_product['description']['short'])) ? $_product['description']['short'] : '';
	
	$keywords= (!empty($_product['keywords'])) ? $_product['keywords'] : '';
	$primary= (!empty($_product['category']['primary'])) ? $_product['category']['primary'] : '';
	$secondary= (!empty($_product['category']['secondary'])) ? $_product['category']['secondary'] : '';
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
									<div class="div_pic1"><img width="100" src="<?php echo $imageurl; ?>"  /></div>
								 </td>
									
								 <td>
										<?php echo $productname ;?>
								  </td>
										
								 <td>
									<?php echo $price ;?>
								  </td>
								  
								 <td>
											
								  </td>
								  
								
								 </tr>
								 </table>
							 
							  		
            
			  <div>
			  

			
<?php echo $this->Form->input('name', array('type'=>'hidden', 'value'=> $productname )); ?>
<?php echo $this->Form->input('image_url', array('type'=>'hidden', 'value'=>  $imageurl )); ?>
<?php echo $this->Form->input('descrition', array('type'=>'hidden', 'value'=> $short)); ?>
<?php echo $this->Form->input('sku', array('type'=>'hidden', 'value'=>$sku)); ?>
<?php echo $this->Form->input('upc', array('type'=>'hidden', 'value'=>$upccode)); ?>
<?php echo $this->Form->input('price', array('type'=>'hidden', 'value'=>$price)); ?>
<?php echo $this->Form->input('sale_price', array('type'=>'hidden', 'value'=>$saleprice)); ?>
<?php echo $this->Form->input('buy_url', array('type'=>'hidden', 'value'=>$linkurl)); ?>
<?php echo $this->Form->input('advetiser_name', array('type'=>'hidden', 'value'=>$merchantname)); ?>
<?php echo $this->Form->input('category', array('type'=>'hidden', 'value'=>$primary)); ?>
<?php echo $this->Form->input('advertiser_id', array('type'=>'hidden', 'value'=>$mid)); ?>
<?php echo $this->Form->input('ad_id', array('type'=>'hidden', 'value'=>$linkid)); ?>
<?php echo $this->Form->input('type', array('type'=>'hidden', 'value'=>'1')); ?>


			
			
			
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
	
	

<?php };}?>