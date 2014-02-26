<div class="title-row">
	<h1 class="title">Add Products</h1>
</div>
<div class="addproduct">
	<h2 class="subtitle">Search Products</h2>
	<?php echo $this->Form->create('product_fetch', array('class'=>'floated'));?>
		<?php			
			echo $this->Form->input('affiliate', array('options' => array('Select Affiliate Program', 'CJ'=>'Commission Junction', 'LS'=>'Link Share'), 'label'=>'Select Affiliate Program'));
			echo $this->Form->input('adv_id', array('options' => $advList, 'label'=>'Select Advertiser Name '));
			echo $this->Form->input('adv_idLs', array('options' => $advListLs, 'label'=>'Select Advertiser Name '));
			echo $this->Form->input('keywords', array( 'label'=>'keyword ','type' => 'text'));
			echo $this->Form->input('category', array( 'label'=>'Category ','type' => 'text'));
			echo $this->Form->input('cur', array( 'label'=>'Currency','type' => 'text'));
			echo $this->Form->input('record', array('options' => array(15=>15, 30=>30, 50=>50), 'label'=>'Records-per-page'));
		?>
	<?php echo $this->Form->end(__('Search Product')); ?>
</div>

<div lass="product-list">

</div>