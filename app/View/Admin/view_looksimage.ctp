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
	



<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'view_user'), array('class'=>'add')); ?>">back to User</a>
	<h1 class="title">View Look Image</h1>
</div>
<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Caption </th> 
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
