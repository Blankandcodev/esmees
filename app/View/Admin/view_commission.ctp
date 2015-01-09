<div class="title-row">
	<h1 class="title">View all Commission</h1>
</div>
<div class="addproduct">
	<h2 class="subtitle">Search Commission</h2>
	<?php 
		$affiliate = isset($searchdata['affiliate']) ? $searchdata['affiliate'] : 0;
		$adv_id = isset($searchdata['adv_id']) ? $searchdata['adv_id'] : 0;
		
		$category = isset($searchdata['to']) ? $searchdata['to'] : '';
		$currency = isset($searchdata['from']) ? $searchdata['from'] : '';
		$afOpts = array('Select Affiliate Program', 'CJ'=>'Commission Junction', 'LS'=>'Link Share');
		
			echo $this->Form->create('order_fetch', array('class'=>'floated cf', 'id'=>'psearchForm'));
			echo $this->Form->input('affiliate', array('options' => $afOpts, 'default'=>$affiliate, 'label'=>'Select Affiliate Program', 'class'=>'required selchk', 'onChange'=>'getMerchantList(this.value, "'.$this->Html->url(array('action'=>'get_merchantlist'), true).'", "#Advlist");'));
			
			echo '<div class="advance cf" id="advance-opts">';
				echo $this->Form->input('adv_id', array('options' => $advList, 'default'=>$adv_id, 'label'=>'Select Advertiser Name ', 'id'=>'Advlist'));
				echo $this->Form->input('To', array( 'label'=>'Start Date ','type' => 'text', 'value'=>$category,'style'=>'width:100px'));
				echo $this->Form->input('From', array( 'label'=>'End Date','type' => 'text', 'value'=>$currency, 'style'=>'width:100px'));
				
				
			echo '</div>';
			echo $this->Form->submit('Search ', array('class'=>'button primary left'));
		?>
	<?php echo $this->Form->end(); ?>
</div>
<div class="product-list">

			<div class="title-row">
				<h1 class="title">Commission List</h1>
			</div>
			
				
				<?php echo $this->element('commission_list'); ?>

				
</div>