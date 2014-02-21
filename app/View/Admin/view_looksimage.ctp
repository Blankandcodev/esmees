<?php
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
	



<div class="users form">
<fieldset>
 <legend>View Looks Image</legend>

<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Caption Name</th> 
    				<th>Image</th> 
    				
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
		
        
      
    </tr>
	<?php endforeach; ?>
	</tbody>
  

</table>
 
</fieldset>
</div>
