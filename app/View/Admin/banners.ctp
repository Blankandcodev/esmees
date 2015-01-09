
	



<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_banners'), array('class'=>'add')); ?>">Add Banner</a>
	<h1 class="title">View Banners</h1>
</div>
<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr>
					
    				<th>Banners</th> 
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
        
	    
       <td><?php 
					
					  $page=$banner['Banner']['pages']; 
					  if($page=='index')
					  {
						echo "<div>Home</div>";
					  }
					  
					  if($page=='men')
					  {
						echo "<div >Men</div>";
					  }
					  
					  if($page=='women')
					  {
						echo "<div >Women</div>";
					  }
					  if($page=='banner1')
					  {
						echo "<div >Become a Member banner Men</div>";
					  }
					  
					  if($page=='banner2')
					  {
						echo "<div >Become a Member banner Women</div>";
					  }
					  if($page=='header')
					  {
						echo "<div >Header</div>";
					  }
					
					  
					  if($page=='footer')
					  {
						echo "<div >Footer</div>";
					  }
					
					
					  
	   
	   
			?>
	   </td>
	    <td><?php 
				$section=$banner['Banner']['section'];
				if($section=='left')
					  {
						echo "<div >Left</div>";
					  }
				if($section=='right')
					  {
						echo "<div >Right</div>";
					  }
				
		
		?>
		
		</td>
		
		<td>
			<?php
			$status=$banner['Banner']['status'];
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
		<td><?php echo $this->Html->image('Banners/'.$banner['Banner']['image'], array('width'=>'100'));?></td>
	
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
