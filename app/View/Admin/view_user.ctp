<div class="users form">
<fieldset>
 <legend>View all User</legend>

<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Member ID</th> 
    				<th>UserName/Email</th> 
    				<th>Name</th> 
					<th>Address</th>
					<th>City</th>
					<th>State</th>
					<th>Zip Code</th>
					<th>Status</th>
					<th>Join Date</th>
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				


    <?php foreach ($users as $user): ?>
	<tbody> 
    <tr>
        
        <td><?php echo  $user['User']['member_id']; ?></td>
        <td><?php echo  $user['User']['username']; ?></td>
		 <td><?php echo  $user['User']['name']; ?></td>
		<td><?php echo  $user['User']['address']; ?></td>
		<td><?php echo  $user['User']['city']; ?></td>
		<td><?php echo  $user['User']['state']; ?></td>
		<td><?php echo  $user['User']['zip']; ?></td>
		<td>
					   <?php echo 
						$user['User']['status']; ?></td>
		<td><?php echo  $user['User']['created']; ?></td>
        
        <td>
        <?php echo $this->Html->link('View Looks Image', array('action'=>'view_looksimage',  $user['User']['id']));?>  
	
        

        </td>
    </tr>
	</tbody>
    <?php endforeach; ?>

</table>
</fieldset>
</div>
