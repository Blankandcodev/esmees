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
				echo $this->Form->input('To', array( 'label'=>'To ','type' => 'text', 'value'=>$category,'style'=>'width:100px'));
				echo $this->Form->input('From', array( 'label'=>'From','type' => 'text', 'value'=>$currency, 'style'=>'width:100px'));
				
				
			echo '</div>';
			echo $this->Form->submit('Search ', array('class'=>'button primary left'));
		?>
	<?php echo $this->Form->end(); ?>
</div>
<div lass="product-list">
<?php if(isset($products)){
	if($products['affiliate'] == "LS"){
		if(!empty($products['Errors'])){ ?>
			<div class="flash flash_error">Error <?php echo $products['Errors']['ErrorID']; ?> : <?php echo $products['Errors']['ErrorText']; ?></div>
		<?php }else{?>
			<div class="title-row">
				<h1 class="title">Product List</h1>
			</div>
			<?php if($products['TotalMatches'] == 0){
				echo '<div class="flash">No results found, try to search using another keyword</div>';
			}else{?>
				<!-- ====== PRODUCT LISTING START ====== -->
				
				<?php echo $this->element('product_list_ls');
				if($products['TotalPages'] > 1 || $products['TotalPages'] < 0){ 
					echo '<div class="actopn cf">';
					if($products['PageNumber'] > 1){ ?>
						<a href="javascript:void(0);" class="button prodPage primary left" rel="psearchForm" data-page="<?php echo $products['PageNumber'] - 1; ?>">Prev</a>
					<?php }; 
					if($products['PageNumber'] < $products['TotalPages']){ ?>
						<a href="javascript:void(0);" class="button prodPage primary left" rel="psearchForm" data-page="<?php echo $products['PageNumber'] + 1; ?>">Next</a>
				<?php }
					echo '</div>';
				} ?>
				
				<!-- ====== PRODUCT LISTING END ====== -->
			<?php }
		}
	} else if($products['affiliate'] == "CJ"){	?>
			<div class="title-row">
				<h1 class="title">Product List</h1>
			</div>
			<?php if($products['@attributes']['total-matched'] == 0){
				echo '<div class="flash">No results found, try to search using another keyword</div>';
			}else{?>
				<!-- ====== PRODUCT LISTING START ====== -->
				
				<?php echo $this->element('product_list_cj');
				
				$totalPage = $products['@attributes']['total-matched'] / $products['@attributes']['records-returned'];
				if($totalPage > 1 || $totalPage < 0){ 
					echo '<div class="actopn cf">';
					if($products['@attributes']['page-number'] > 1){ ?>
						<a href="javascript:void(0);" class="button prodPage primary left" rel="psearchForm" data-page="<?php echo $products['@attributes']['page-number'] - 1; ?>">Prev</a>
					<?php }; 
					if($products['@attributes']['page-number'] < $totalPage){ ?>
						<a href="javascript:void(0);" class="button prodPage primary left" rel="psearchForm" data-page="<?php echo $products['@attributes']['page-number'] + 1; ?>">Next</a>
				<?php }
					echo '</div>';
				} ?>
				
				<!-- ====== PRODUCT LISTING END ====== -->
		<?php }
	}
}; ?>
</div>