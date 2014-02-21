<div class="users form">
<fieldset>
 <legend>View Category</legend>
<table class="tablesorter" cellspacing="0"> 
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
        <?php echo $this->Html->link('Edit', array('action'=>'edit_category',  $cat['Category']['id']));?> | 
        <?php echo $this->Html->link('Delete', array('action' => 'delete_category',  $cat['Category']['id']), null, 'Are you sure?' )?>

        </td>
    </tr>
	</tbody>
    <?php endforeach; ?>

</table>
</fieldset>
</div>