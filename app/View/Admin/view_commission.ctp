<div class="title-row">
	<h1 class="title">All  Commission</h1>
</div>
<div class="addproduct">
	<h2 class="subtitle">Search </h2>
	<?php 
		
		
			echo $this->Form->create('commission_fetch', array('class'=>'floated cf', 'id'=>'psearchForm'));
			
			echo '</div>';
			echo $this->Form->submit('Commission', array('class'=>'button primary left'));
		?>
	<?php echo $this->Form->end(); ?>
</div>
<div lass="product-list">

</div>