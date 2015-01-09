
<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_category'), array('class'=>'add')); ?>">Add New Category</a>
	<h1 class="title">Category List</h1>
</div>

<table class="dtable" cellspacing="0"> 
	<thead> 
		<tr>
			<th>Category Name</th>
			<th width="150">Actions</th> 
		</tr> 
	</thead>
	<?php foreach ($categories as $catId=>$cat):
	?>
	<tr>
		<td><?php echo  $cat; ?></td>
			<td align='right'>
				<?php echo $this->Html->link('Edit', array('action'=>'edit_category',  $catId),array('class'=>'edit'));?>
				<?php echo $this->Html->link('Delete', array('action' => 'delete_category',  $catId),array('class'=>'delete-btn'),'Are you sure?' )?>
			</td>
		</tr>
    <?php endforeach; ?>
</table>
</fieldset>
</div>