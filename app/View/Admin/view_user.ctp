
<div class="title-row">
	
	<h1 class="title">User List</h1>
</div>
<table class="dtable" cellspacing="0"> 
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
				


    <?php foreach ($users as $user): ?>
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
        <?php echo $this->Html->link('User looks', array('action'=>'view_looksimage',  $user['User']['id']), array('class'=>'gallery-btn'));?>  
		 <?php echo $this->Html->link('Delete', array('action'=>'delete',  $user['User']['id']), array('class'=>'gallery-btn'));?>  
        

        </td>
	
    </tr>
    <?php endforeach; ?>

</table>