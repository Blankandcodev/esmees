<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_page'), array('class'=>'add')); ?>">Add New Pages</a>
	<h1 class="title">Page List</h1>
</div>
<?php if(!empty($pages)){ ?>
<table class="dtable" cellspacing="0"> 
			<thead> 
				<tr>
    				<th>Page Title</th>
    				<th width="250">Actions</th> 
				</tr> 
			</thead> 
				


    <?php foreach ($pages as $page): ?>
    <tr>
        
        <td><?php echo  $page['Page']['name']; ?></td>
        
        <td  align='right'>
        <?php echo $this->Html->link('View page', array('controller'=>'Pages', 'action'=>$page['Page']['slug']), array('class'=>'view', 'target'=>'_blank'));?>
        <?php echo $this->Html->link('Edit', array('action'=>'edit_page', $page['Page']['id']), array('class'=>'edit'));?>
        <?php echo $this->Html->link('Delete', array('action' => 'delete_page', $page['Page']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>

        </td>
    </tr>
    <?php endforeach; ?>

</table>
<?php }else{ ?>
	<a class="button primary large" href="<?php echo $this->Html->url(array('action'=>'add_page'), array('class'=>'add')); ?>">Create your first page Page</a>
<?php } ?>