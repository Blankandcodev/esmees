<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_adversiters'), array('class'=>'add')); ?>">Add More Products</a>
	<h1 class="title">Merchants List</h1>
</div>
<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Adversiter ID</th> 
    				<th>Adversiter Name</th> 
    				
    				<th>Actions</th> 
				</tr> 
			</thead> 
				


    <?php foreach ($advs as $adv): ?>
    <tr>
        
        <td><?php echo  $adv['Adv']['adv_id']; ?></td>
       
		<td><?php echo  $adv['Adv']['adv_name']; ?></td>
        
        <td>
        <?php echo $this->Html->link('Edit', array('action'=>'edit_adversiters',  $adv['Adv']['id']));?> | 
        <?php echo $this->Html->link('Delete', array('action' => 'delete_adversiters',  $adv['Adv']['id']), null, 'Are you sure?' )?>

        </td>
    </tr>
    <?php endforeach; ?>

</table>