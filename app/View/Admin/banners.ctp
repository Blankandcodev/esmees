
	



<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_banners'), array('class'=>'add')); ?>">Add Banner</a>
	<h1 class="title">View Banners</h1>
</div>
<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr>
					<th>Heading </th> 
    				<th>Page</th> 
					<th>Section</th> 
					<th>Status</th>
    				<th>Image</th> 
					<th width="150">Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				


    
	<tbody> 
	 <?php foreach ($bannerList as $banner): ?>
    <tr>
        
	    <td><?php echo  $banner['Banner']['heading']; ?></td>
       <td><?php echo  $banner['Banner']['pages']; ?></td>
	    <td><?php echo $banner['Banner']['section']; ?></td>
		
		<td>
			<?php
			$status=$banner['Banner']['status'];
			if($status==0)
			{
				echo "<div style='color:red'>Not Active</div>";
			}
			if($status==1)
			{
			  echo 	"<div style='color:green'>Active</div>";
			}
			?>
		</td>
		<td><?php echo $this->Html->image('banners/big/'.$banner['Banner']['image'], array('width'=>'100'));?></td>
		 <td>
       
		 <?php echo $this->Html->link('Edit', array('action' => 'edit_banner', $banner['Banner']['id']), array('class'=>'edit') )?>

        <?php echo $this->Html->link('Delete', array('action' => 'delete_banner', $banner['Banner']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>


        </td>
		
        
      
    </tr>
	<?php endforeach; ?>
	</tbody>
  

</table>

</div>
 
</fieldset>
</div>
