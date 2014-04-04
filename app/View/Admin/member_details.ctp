<?php
	foreach($looks as $look){
	$user_look = $look['Look'];

	foreach($looks as $look){
	$user_look = $look['Look'];
	
	
	
	
	//echo "================================<br>";
	//print_r($order_detail['user_id']);
	//echo "<br>";
	//print_r($order_user['name']);
	//echo "<br>";
	//print_r($order_item['name']);
	//echo "<br>";
	//echo "================================<br>";
	//echo "================================<br>";
}
?>


<div class="title-row">

	<h1 class="title">Personal Details</h1>
</div>
<table class="dtable" cellspacing="0"> 

<table class="dtable" cellspacing="0"> 
<fieldset>

<tbody> 
				


    
	<tbody> 
	<?php if(!empty($userList)){ ?>
	<?php foreach ($userList as $user): ?>
    <tr>
        
		<td>Member ID</td>
        <td>
			<?php echo  $user['member_id']; ?>
	   </td>
       
        
      
    </tr>
	 <tr>
        
		<td>Name</td>
        <td><?php echo  $user['name']; ?>
	   
	   </td>
       
        
      
    </tr>
	 <tr>
        
		<td>Address</td>
        <td><?php echo  $user['address']; ?>	
	   
	   </td>
       
        
      
    </tr>
	 <tr>
        
		<td>City</td>
        <td><?php echo  $user['address']; ?>	
	   
	   </td>
       
        
      
    </tr>
	 <tr>
        
		<td>State</td>
        <td><?php echo  $user['address']; ?>	
	   
	   </td>
       
        
      
    </tr>
	 <tr>
        
		<td>Zip Code</td>
        <td><?php echo  $user['address']; ?>	
	   
	   </td>
       
        
      
    </tr>
	 <tr>
        
		<td>Country</td>
        <td><?php echo  $user['address']; ?>	
	   
	   </td>
       
        
      
    </tr>
	
	 <tr>
        
		<td>Bank Name</td>
        <td>SBI
	   
	   </td>
       
        
      
    </tr>
	
	 <tr>
        
		<td>A/c Number</td>
        <td>SBI283929392
	   
	   </td>
       
        
      
    </tr>
	
		
	 <tr>
        
		<td>A/c Number</td>
        <td>SBI283929392
	   
	   </td>
       
        
      
    </tr>
	 <tr>
        
		<td>A/c Number</td>
        <td>SBI283929392
	   
	   </td>
       
        
      
    </tr>
	<?php endforeach; ?>  
	</div>
	<?php }else{
		echo '<div class="flash">No Personal Details  yet!</div>';
	} ?>
		</div>
	</tbody>
  

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
 
 	
</fieldset>



<div class="title-row">

	<h1 class="title">View Look Image</h1>
</div>
<table class="dtable" cellspacing="0"> 
<thead> 
				
			</thead> 
			<thead> 
				<tr> 
   					 
    				<th>Caption </th> 
    				<th>Image</th> 
    				
    				<th></th> 
					<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				


    
	<tbody> 
	 <?php foreach ($looks as $look): ?>
    <tr>
        
       <td><?php echo  $look['Look']['caption_name']; ?>
	   
	   </td>
       <td>
		<?php
		echo $this->Html->image('Looks/big/'.$look['Look']['image'], array('width'=>'100', 'height'=>'136'));?>
		
		<td>
		 <td>
       

        <?php echo $this->Html->link('Delete', array('action' => 'delete_looks', $look['Look']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>


        </td>
		
        
      
    </tr>
	<?php endforeach; ?>
	</tbody>
  

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
 
</fieldset>




<div class="title-row">
	
	<h1 class="title">Purchased Items</h1>
</div>
<table class="dtable" cellspacing="0"> 
<thead> 
				
			</thead> 
			<thead> 
				<tr> 
   					 
    				<th>Product ID </th> 
    				<th>Product Name</th> 
    				
    				<th>Sku</th> 
					<th>Qty.</th> 
					<th>Price</th>
					<th>Total</th> 
				</tr> 
			</thead> 
			<tbody> 
				


    
	<tbody> 
	 <?php foreach ($looks as $look): ?>
    <tr>
        
       <td><?php echo  $look['Look']['caption_name']; ?>
	   
	   </td>
       <td>
		<?php
		echo $this->Html->image('Looks/big/'.$look['Look']['image'], array('width'=>'100', 'height'=>'136'));?>
		
		<td>
		 <td>
       
					<?php echo  $look['Look']['caption_name']; ?>
       


        </td>
		
		<td>
       
					<?php echo  $look['Look']['caption_name']; ?>
       


        </td>
		
		<td>
       
					<?php echo  $look['Look']['caption_name']; ?>
       


        </td>
		
        
      
    </tr>
	<?php endforeach; ?>
	</tbody>
  

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
 
</fieldset>





<div class="title-row">
	
	<h1 class="title">Wishlist Items</h1>
</div>
<table class="dtable" cellspacing="0"> 
<thead> 
				
			</thead> 
			<thead> 
				<tr> 
   					 
    				<th>Product ID </th> 
    				<th>Product Name</th> 
    				
    				<th>Added From</th> 
					<th>Added date</th> 
					
				</tr> 
			</thead> 
			<tbody> 
				


    
	<tbody> 
	 <?php foreach ($looks as $look): ?>
    <tr>
        
       <td><?php echo  $look['Look']['caption_name']; ?>
	   
	   </td>
       <td>
		<?php
		echo $this->Html->image('Looks/big/'.$look['Look']['image'], array('width'=>'100', 'height'=>'136'));?>
		
		<td>
		 <td>
       

        <?php echo $this->Html->link('Delete', array('action' => 'delete_looks', $look['Look']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>


        </td>
		
        
      
    </tr>
	<?php endforeach; ?>
	</tbody>
  

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
 
</fieldset>

</div>
