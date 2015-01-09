
<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_products'), array('class'=>'add')); ?>"> View Product</a>
	<h1 class="title">Edit Products</h1>
</div>

	
<div class="users form">
	<?php echo $this->Form->create('Product'); ?>
	
	<?php  echo $this->Form->input('id', array('type'=>'hidden')); ?>
<fieldset>


	<?php echo $this->Form->input('parent_id', array('options' => $categoryList, 'label'=>'Select Category Name'));?>
	<?php echo $this->Form->input('name',array('label'=>'Product Name','type'=>'text'));?>
	<?php echo $this->Form->input('descrition',array('label'=>'Product Descrition','type'=>'text')); ?>
	<?php echo $this->Form->input('price',array('label'=>'Product Price','type'=>'text')); ?>
	<?php echo $this->Form->input('sale_price',array('label'=>'Product Sale Price','type'=>'text'));?>
	<?php echo $this->Form->input('sku',array('label'=>'Product Sku','type'=>'text')); ?>
	<?php echo $this->Form->input('ad_id',array('label'=>'Product ad id','type'=>'text')); ?>
	<?php echo $this->Form->input('advertiser_id',array('label'=>'Advertiser id','type'=>'text'));?>
	<?php echo $this->Form->input('advetiser_name',array('label'=>'advetiser name','type'=>'text')); ?>
	<?php echo $this->Form->input('buy_url',array('label'=>'Buy URL','type'=>'text'));?>
	<?php echo $this->Form->input('image_url',array('label'=>'Image URL','type'=>'text')); ?>
	<div class="profile-image input">
							
							
	<?php echo '<img src="'. $productList['image_url'].'" width=100 height=100  border:1px>' ?>
								
							
	</div>

	<?php echo $this->Form->submit('Update Product', array('class'=>'primary button'));?>
</div>
		</fieldset>
		
	</div>
	<div>
	
</div>
	<div>
			<?php echo $this->Form->end(); ?>
		</div>
	
	



	