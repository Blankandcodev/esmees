
	



<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_banners'), array('class'=>'add')); ?>">Add Banner</a>
	<h1 class="title">View Banners</h1>
</div>
<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				
    				<th>Page</th> 
					<th>Heading </th> 
					<th>Section</th> 
					<th>Description</th> 
					<th>Url</th> 
    				
    				<th>Image</th> 
					<th></th> 
					<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				


    
	<tbody> 
	 <?php foreach ($bannerList as $banner): ?>
    <tr>
        
       <td><?php echo  $banner['Banner']['pages']; ?>
	   
	   </td>
	    <td><?php echo  $banner['Banner']['heading']; ?>
	   
	   </td>
	    <td><?php echo $banner['Banner']['section']; ?>
	   
	   </td>
	    <td><?php echo  $banner['Banner']['description']; ?>
	   
	   </td>
	   
	    <td><?php echo  $banner['Banner']['buy_url']; ?>
	   
	   </td>
       <td>
		<?php
		echo $this->Html->image('banners/big/'.$banner['Banner']['image'], array('width'=>'100', 'height'=>'136'));?>
		
		<td>
		 <td>
       

        <?php echo $this->Html->link('Delete', array('action' => 'delete_looks', $banner['Banner']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>


        </td>
		
        
      
    </tr>
	<?php endforeach; ?>
	</tbody>
  

</table>

</div>
 
</fieldset>
</div>
