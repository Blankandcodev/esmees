


	
<div class="users form">
<fieldset>
 <legend>Product Details</legend>
 <?php echo $this->Form->create('Product'); ?>
<?php echo $this->Form->input('id',array('type'=>'Hidden'));?>
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
</div>
		</fieldset>
		
	</div>
	<div>
	<fieldset>
	<?php

		echo $this->Form->input('parent_id', array('options' => $categoryList, 'label'=>'Select Category Name'));
	
?>
</fieldset>
</div>
	<div>
			<?php echo $this->Form->end(__('Update Product')); ?>
		</div>
	
	



	