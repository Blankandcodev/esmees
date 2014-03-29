
<div class="title-row">
	
	<h1 class="title">All Commission</h1>
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
				Adversiter ID
			
			
			</th> 
			<th>
				Member ID
			</th> 
			
		
			
			
			<th>
					Order ID
			</th>
			<th>
					 Commission
			
			</th>
			<th>
				Member Commission(50%)
			
			</th>
			<th>
				Transaction Date
			
			</th>
			<th>
				Vesting Date
			
			</th>
			
		</tr> 
	</thead>
				


    <?php foreach ($commissionList as $comm): ?>
    <tr>
        
        <td><?php echo  $comm['Commission']['adv_id']; ?></td>
        <td><?php echo  $comm['Commission']['member_id']; ?></td>
		 <td><?php echo  $comm['Commission']['order_id']; ?></td>
		  <td>$<?php echo  $comm['Commission']['commissions']; ?></td>
		   <td>$<?php echo  $comm['Commission']['user_commission']; ?></td>
		    <td><?php echo  $comm['Commission']['transaction_date']; ?></td>
		    <td><?php echo  $comm['Commission']['vesting_date']; ?></td>
	
		
		
	
      
       
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