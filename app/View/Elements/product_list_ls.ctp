<table class="dtable">
<thead>
<tr>
	<th width="100">Title</th>
	<th>&nbsp;</th>
	<th>Price</th>
	<th width="100">Action</th>
</tr>
</thead>
<?php foreach($products['item'] as $_product){
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
	$secondary= (!empty($_product['category']['secondary'])) ? $_product['category']['secondary'] : ''; ?>
	<tr>
		<td><img width="100" src="<?php echo $imageurl; ?>"  /></td>
		<td><?php echo $productname ;?></td>
		<td><?php echo $price ;?></td>
		<td>
			<?php echo $this->Form->create('add_product', array('url'=>array('controller'=>'admin', 'action'=>'add_product'), 'class'=>'addProduct'));?>
			
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

			<?php echo $this->Form->input('parent_id', array('options' => $categoryList, 'class'=>'selchk', 'style'=>'width:auto;', 'label'=>false)); ?>
			<?php echo $this->Form->end(__('Add Product')); ?>
		</td>
	</tr>
<?php } ?>
</table>