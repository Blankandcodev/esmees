<div class="title-row">
	<h1 class="title">Add Products</h1>
</div>
<div class="addproduct">
	<h2 class="subtitle">Search Products</h2>
	<?php 
		$affiliate = isset($searchdata['affiliate']) ? $searchdata['affiliate'] : 0;
		$ksettype = isset($searchdata['ktype']) ? $searchdata['ktype'] : 0;
		$adv_id = isset($searchdata['adv_id']) ? $searchdata['adv_id'] : 0;
		$record = isset($searchdata['record']) ? $searchdata['record'] : 15;
		$keywords = isset($searchdata['keywords']) ? $searchdata['keywords'] : '';
		//$category = isset($searchdata['category']) ? $searchdata['category'] : '';
		$currency = isset($searchdata['currency']) ? $searchdata['currency'] : '';
		$afOpts = array('Select Affiliate Program', 'CJ'=>'Commission Junction', 'LS'=>'Link Share');
		$ktype = array('keyword'=>'with all of the words', 'exact'=>'with the exact phrase', 'one'=>'with at least one of the words');
		
			echo $this->Form->create('product_fetch', array('class'=>'floated cf', 'id'=>'psearchForm'));
			echo $this->Form->input('affiliate', array('options' => $afOpts, 'default'=>$affiliate, 'label'=>'Select Affiliate Program', 'class'=>'required selchk', 'onChange'=>'getMerchantList(this.value, "'.$this->Html->url(array('action'=>'get_merchantlist'), true).'", "#Advlist");'));
			echo $this->Form->input('ktype', array('options' => $ktype, 'default'=>$ksettype, 'label'=>'Search Type', 'class'=>'required selchk'));
			echo $this->Form->input('keywords', array( 'label'=>'keyword ','type' => 'text', 'class'=>'required', 'value'=>$keywords));
			echo '<div class="advance cf" id="advance-opts">';
				echo $this->Form->input('adv_id', array('options' => $advList, 'default'=>$adv_id, 'label'=>'Select Advertiser Name ', 'id'=>'Advlist'));
				//echo $this->Form->input('category', array( 'label'=>'Category ','type' => 'text', 'value'=>$category));
				echo $this->Form->input('currency', array( 'label'=>'Currency','type' => 'text', 'value'=>$currency, 'style'=>'width:50px'));
				echo $this->Form->input('pagenumber', array( 'label'=>'Page','type' => 'text', 'value'=>1, 'id'=>'pageNo', 'style'=>'width:50px'));
				echo $this->Form->input('record', array('options' => array(15=>15, 30=>30, 50=>50), 'default'=>$record, 'label'=>'Records-per-page'));
			echo '</div>';
			echo $this->Form->submit('Search Products', array('class'=>'button primary left'));
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