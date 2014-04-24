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
<div class="addproduct">
	<h2 class="subtitle">Search Looks</h2>
	<?php 
	
		
			echo $this->Form->create('product_fetch');
			
			echo $this->Form->input('keyword', array( 'label'=>'Keywords ','type' => 'text','placeholder'=>'User Search wise User Aka/first Name /memberID' , 'class'=>'required'));

			
			
			echo $this->Form->submit('Search', array('class'=>'button primary left'));
		?>
	<?php echo $this->Form->end(); ?>
</div>
<div class="paginate">
</div>
<?php if(!empty($looks)){ ?>
<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Caption </th> 
    				<th>Image</th> 
    				
    				<th></th> 
					<th width="150px">Actions</th> 
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
		echo $this->Html->image('Looks/big/'.$look['Look']['image'], array('width'=>'50', 'height'=>'50'));?>
		
		<td>
		 <td>
       

        <?php echo $this->Html->link('Delete', array('action' => 'delete_looks', $look['Look']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>


        </td>
		
        
      
    </tr>
	
	<?php endforeach; ?>
	</tbody>
	
  

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
 
</fieldset>
</div>
