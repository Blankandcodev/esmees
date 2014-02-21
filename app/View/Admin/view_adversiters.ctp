<div class="users form">
<fieldset>
 <legend>View Adversiter</legend>
<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Adversiter ID</th> 
    				<th>Adversiter Name</th> 
    				<th>Affilicate Type</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				


    <?php foreach ($advs as $adv): ?>
	<tbody> 
    <tr>
        
        <td><?php echo  $adv['Adv']['adv_id']; ?></td>
        <td><?php echo  $adv['Adv']['adv_name']; ?></td>
		<td><?php echo  $adv['Adv']['adv_name']; ?></td>
        
        <td>
        <?php echo $this->Html->link('Edit', array('action'=>'edit_adversiters',  $adv['Adv']['id']));?> | 
        <?php echo $this->Html->link('Delete', array('action' => 'delete_adversiters',  $adv['Adv']['id']), null, 'Are you sure?' )?>

        </td>
    </tr>
	</tbody>
    <?php endforeach; ?>

</table>
</fieldset>
</div>
