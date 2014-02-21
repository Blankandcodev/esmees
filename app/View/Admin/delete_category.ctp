
<article class="module width_full">
			<header><h3>View Category</h3></header>
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
        <?php echo $this->Html->link('Edit', array('action'=>'edit',  $cat['Category']['id']));?> | 
        <?php echo $this->Html->link('Delete', array('action' => 'delete',  $cat['Category']['id']), null, 'Are you sure?' )?>

        </td>
    </tr>
	</tbody>
    <?php endforeach; ?>

</table>
</article>