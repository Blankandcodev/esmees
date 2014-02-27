
<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_subcategory'), array('class'=>'add')); ?>">Add New Category</a>
	<h1 class="title">Category List</h1>
</div>

<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				
    				<th>Category Name</th> 
					
    				<th  align='right'>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				


    <?php foreach ($categories as $cat): ?>
	<tbody> 
    <tr>
        
       
		<td><?php echo  $cat['Category']['name']; ?></td>
      
        <td align='right'>
        <?php echo $this->Html->link('Edit', array('action'=>'edit_category',  $cat['Category']['id']),array('class'=>'edit'));?> 
        <?php echo $this->Html->link('Delete', array('action' => 'delete_category',  $cat['Category']['id']),array('class'=>'delete-btn'),'Are you sure?' )?>

        </td>
    </tr>
	</tbody>
    <?php endforeach; ?>

</table>
</fieldset>
</div>