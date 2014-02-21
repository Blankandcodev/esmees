<!-- File: /app/views/users/index.ctp -->
<h4 class="alert_info"><?php echo $this->Html->link('Add New Adversiter',array('controller' => 'Advs', 'action' => 'add')); ?></h4>



<article class="module width_full">
			<header><h3> Adversiter list</h3></header>
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
        <?php echo $this->Html->link('Edit', array('action'=>'edit',  $adv['Adv']['id']));?> | 
        <?php echo $this->Html->link('Delete', array('action' => 'delete',  $adv['Adv']['id']), null, 'Are you sure?' )?>

        </td>
    </tr>
	</tbody>
    <?php endforeach; ?>

</table>
</article>
