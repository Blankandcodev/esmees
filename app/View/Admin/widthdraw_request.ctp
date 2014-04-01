
<div class="title-row">
	
	<h1 class="title">Widthdraw Request List</h1>
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
			echo $this->Paginator->sort('status','Amount',array('escape' => false));
		?>
			
			</th>
			
			<th>
			
			<?php
			echo $this->Paginator->sort('request_date','Status',array('escape' => false));
		?>
			
			</th>
			<th>Date</th> 
			<th>Actions</th> 
		</tr> 
	</thead>
				


    <?php foreach ($widthDraws as $user):
	
				
	

	?>
    <tr>
        
        <td><?php echo  $user['User']['member_id']; ?></td>
        <td><?php echo  $user['User']['username']; ?></td>
	
		<td>$<?php echo  $user['Widthdraw']['widthdraw_request_amount']; ?></td>
		
		<td> 
		<?php 
			$status=$user['Widthdraw']['status'];
			if($status==0)
			{
				echo "Unpaid";
			}
			if($status==1)
			{
				echo "Paid";
			}
			

		?></td>
		<td><?php echo  $user['Widthdraw']['request_date']; ?></td>
		
	
      
        <td align='right'>
        <?php echo $this->Html->link('Widthdraw', array('action'=>'user_detail',  $user['User']['id']), array('class'=>'gallery-btn'));?>  
		

        <?php echo $this->Html->link('Delete', array('action' => 'delete_widthdraw_request', $user['Widthdraw']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>


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