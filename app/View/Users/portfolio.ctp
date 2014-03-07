<div class="page-container">
	<div class="title">
		<a class="back-link" href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img class="left" src="<?php echo $this->webroot; ?>img/img17.png" /> &nbsp;Back</a>
		<h1>Portfolio</h1>
	</div>
	
	<div class="portfolio">
	<?php foreach($orderLists as $order){
		$_product = $order['Product'];
		$looks = $order['Look'];
	?>
		<div class="portfolio-row cf">
			<div class="product-info pbox">
				<a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'product_detail', $_product['id'])); ?>"><img src="<?php echo $_product['image_url']; ?>"></a>
				<div class="sinfo">
					<?php echo $_product['name']; ?>
				</div>
			</div>
			
			<?php $i=0; 
			foreach($looks as $look){ ;?>
				<div class="look-info pbox">
					<a class="img" href="<?php echo $this->Html->url(array('controller'=>'looks', 'action'=>'detail', $look['Id'])); ?>"><img  src="<?php echo $this->webroot. 'img/Looks/home/' .$look['image']; ?>"></a>
					<div class="sinfo">
						<?php echo $look['caption_name']; ?>
						<span class="delete-icn"><?php echo $this->Html->link('Delete', array('action' => 'delete_potfolio', $look['Id']), null, 'Are you sure?' )?> </span>
						<span class="edit-icn"><?php echo $this->Html->link('Edit', array('controller' => 'Users', 'action' => 'edit_lookimage',  $look['Id']));?></span>
					</div>
				</div>
			<?php $i++;
			}
			if($i < 3){ ?>
				<div class="look-info pbox">
					<a href="<?php echo $this->Html->url(array('action'=>'upload_lookimage',$_product['id'], $loggeduser['id'] )) ?>" class="img"><img style="width:auto;" src="<?php echo $this->webroot; ?>img/plus.png"></a>
				</div>
			<?php } ?>
		</div>
   <?php } ?>
	</div>	
</div>