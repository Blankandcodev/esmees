<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'distributed_commission'), array('class'=>'add')); ?>">View all Distributed Commission </a>
	<h1 class="title">Member Distributed Commission List</h1>
</div>

<div class="addproduct">
	<h2 class="subtitle">Search Users</h2>
	<?php 
	
		
			echo $this->Form->create('product_fetch');
			
			echo $this->Form->input('keyword', array( 'label'=>'Keywords ','type' => 'text','placeholder'=>'User Search wise Aka/firstname/email address/memberID' , 'class'=>'required'));

			
			
			echo $this->Form->submit('Search', array('class'=>'button primary left'));
		?>
	<?php echo $this->Form->end(); ?>
</div>

<div class="paginate">
</div>


<table class="dtable" cellspacing="0"> 
	<thead> 
		<tr> 
			 
			<th>
			
			 Name
			
			</th> 
			<th>
				Email Address
			
			</th> 
			<th>
				City
			
			</th> 
			<th>
				State
			
			</th> 
			<th>
				Country
			
			</th> 
			<th>
				Bank
			
			</th> 
			<th>
				S.S.No
			
			</th> 
			<th>
				A/c No.
			
			</th> 
			<th>
				Routing No.
			
			</th> 
			<th>
				Amount($)
			
			</th> 
			
			
			<th>Date</th> 
			<th>Actions</th> 
		</tr> 
	</thead>
				


    <?php foreach ($payments as $user):
	
				
	

	?>
    <tr>
        
        <td><?php echo  $user['User']['name']." ". $user['User']['last_name']; ?></td>
        <td><?php echo  $user['User']['username']; ?></td>
		<td><?php echo  $user['User']['city']; ?></td>
		<td><?php echo  $user['User']['state']; ?></td>
		<td><?php echo  $user['User']['country']; ?></td>
		<td><?php echo  $user['User']['bankname']; ?></td>
		<td><?php echo  $user['User']['ss_number']; ?></td>
		<td><?php echo  $user['User']['bankaccount_no']; ?></td>
		<td><?php echo  $user['User']['bankrouting_no']; ?></td>
		<td>$<?php echo $user['Payment']['amount']; ?></td>
		<td><?php echo  $user['Payment']['generate_date']; ?></td>
		
	
      
        <td align='right'>
       
		

        <?php echo $this->Html->link('Delete', array('action' => 'delete_payment', $user['Payment']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>


        </td>
	
    </tr>
    <?php endforeach; ?>

</table>
<div class="paginate">
<?php	
echo $this->Paginator->numbers(array(
  //'modulus' => 4,   /* Controls the number of page links to display */
  'first' => '< First',
  'last' => 'Last >',
  'separator'=>'</li><li>',
  'before' => '<ul><li>', 'after' => '</li></ul>')
);
?>
</div>