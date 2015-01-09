
<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_looksimage'), array('class'=>'add')); ?>">View all Looks</a>
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

<?php if(!empty($users)){ ?>
<table class="dtable" cellspacing="0"> 
	<thead> 
		<tr> 
			 
			<th width="100px">
			
			<?php
			echo $this->Paginator->sort('member_id','Member ID',array('escape' => false));
		?>
			
			</th> 
			<th width="150">
			
			<?php
			echo $this->Paginator->sort('nickname','User Aka',array('escape' => false));
		?>
			
			</th> 
			<th>
			<?php
			echo $this->Paginator->sort('username','Email Address',array('escape' => false));
		?>
			
			</th> 
			<th width="100px">
			<?php
			echo $this->Paginator->sort('name','Full Name',array('escape' => false));
		?>
			
			</th> 
			
		
		
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
			<th width="100px">
			<?php
			echo $this->Paginator->sort('zip','Zip Code',array('escape' => false));
		?>
			
			</th>
			<th>
			<?php
			echo $this->Paginator->sort('status','Status',array('escape' => false));
		?>
			
			</th>
			
			<th>Looks</th> 
			<th>Delete</th> 
		</tr> 
	</thead>
				


    <?php foreach ($users as $user): ?>
    <tr>
        
        <td><?php echo  $user['User']['member_id']; ?></td>
        <td><?php echo  $user['User']['nickname']; ?></td>
		 <td><?php echo  $user['User']['username']; ?></td>
		<td><?php echo  $user['User']['name']; ?> <?php echo  $user['User']['last_name']; ?></td>
		
		
		<td><?php echo  $user['User']['city']; ?></td>
		<td><?php echo  $user['User']['state']; ?></td>
		<td><?php echo  $user['User']['zip']; ?></td>
		<td>
			<?php
			$status=$user['User']['status'];
			if($status==0)
			{
				echo "<div style='color:red'>In Active</div>";
			}
			if($status==1)
			{
			  echo 	"<div style='color:green'>Active</div>";
			}
			?>
		</td>
		
		<td>
			<?php echo $this->Html->link('View', array('action' => 'view_looks', $user['User']['id']), array('class'=>'view') )?>
		</td>
        <td width="150px">
        
		
	
        <?php echo $this->Html->link('Delete', array('action' => 'delete', $user['User']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>


        </td>
	
    </tr>
    <?php endforeach; ?>

</table>
</div>
	<?php }else{
		echo '<div class="flash">No matching records found!</div>';
	} ?>
		</div>
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