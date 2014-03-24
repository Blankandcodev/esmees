
<div class="title-row">
	
	<h1 class="title">User List</h1>
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
			
			<?php
			echo $this->Paginator->sort('member_id','Member ID',array('escape' => false));
		?>
			
			</th> 
			<th>
			<?php
			echo $this->Paginator->sort('username','UserName/Email',array('escape' => false));
		?>
			
			</th> 
			<th>
			<?php
			echo $this->Paginator->sort('name','First Name',array('escape' => false));
		?>
			
			</th> 
			<th>
			<?php
			echo $this->Paginator->sort('last_name','Last Name',array('escape' => false));
		?>
			
			</th> 
			<th>Date of Birth</th> 
			<th>
			<?php
			echo $this->Paginator->sort('city','City',array('escape' => false));
		?>
			
			</th>
			<th>
			<?php
			echo $this->Paginator->sort('state','State',array('escape' => false));
		?>
			
			</th>
			<th>
			<?php
			echo $this->Paginator->sort('status','Status',array('escape' => false));
		?>
			
			</th>
			<th>
			
			<?php
			echo $this->Paginator->sort('created','Join Date',array('escape' => false));
		?>
			
			</th>
			<th>Actions</th> 
		</tr> 
	</thead>
				


    <?php foreach ($users as $user): ?>
    <tr>
        
        <td><?php echo  $user['User']['member_id']; ?></td>
        <td><?php echo  $user['User']['username']; ?></td>
		<td><?php echo  $user['User']['name']; ?></td>
	<td><?php echo  $user['User']['last_name']; ?></td>
		<td><?php echo  $user['User']['city']; ?></td>
		<td><?php echo  $user['User']['state']; ?></td>
		<td><?php echo  $user['User']['zip']; ?></td>
		<td>
					   <?php echo 
						$user['User']['status']; ?></td>
		<td><?php echo  $user['User']['created']; ?></td>
      
        <td>
        <?php echo $this->Html->link('User looks', array('action'=>'view_looksimage',  $user['User']['id']), array('class'=>'gallery-btn'));?>  

        <?php echo $this->Html->link('Delete', array('action' => 'delete', $user['User']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>


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