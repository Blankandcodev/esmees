<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_pages'), array('class'=>'add')); ?>">Add New Pages</a>
	<h1 class="title">Page List</h1>
</div>
<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr> 
   					 
    				<th>Page Title</th> 
    				<th>Description</th> 
    				
    				<th width="150">Actions</th> 
				</tr> 
			</thead> 
				


    <?php foreach ($pages as $page): ?>
    <tr>
        
        <td><?php echo  $page['Page']['name']; ?></td>
       
		<td><?php echo  $page['Page']['description']; ?></td>
        
        <td  align='right'>
        <?php echo $this->Html->link('Edit', array('action'=>'edit_pages', $page['Page']['id']), array('class'=>'edit'));?> 
        <?php echo $this->Html->link('Delete', array('action' => 'delete_pages', $page['Page']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>

        </td>
    </tr>
    <?php endforeach; ?>

</table>