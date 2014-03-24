<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'add_adversiters'), array('class'=>'add')); ?>">Add New Merchants</a>
	<h1 class="title">Merchants List</h1>
</div>

<div class="addproduct">
	<h2 class="subtitle">Search Merchants</h2>
	<?php 
	
		
			echo $this->Form->create('product_fetch');
			
			echo $this->Form->input('keyword', array( 'label'=>'Merchant Name ','type' => 'text',  'class'=>'required'));
			
			
			echo $this->Form->submit('Search', array('class'=>'button primary left'));
		?>
	<?php echo $this->Form->end(); ?>
</div>

<div class="paginate">
</div>

<table class="dtable" cellspacing="0"> 


			
				

			<thead> 
				<tr> 
   					 
    				<th>Merchant ID</th> 
    				<th>Merchant Name</th> 
					<th>Vesting Peroid</th> 
					<th>Merchant Website Url</th> 
    				
    				<th width="150">Actions</th> 
				</tr> 
			</thead> 
				


    <?php foreach ($advs as $adv): ?>
    <tr>
        
        <td><?php echo  $adv['Adv']['adv_id']; ?></td>
       
		<td><?php echo  $adv['Adv']['adv_name']; ?></td>
		<td><?php echo  $adv['Adv']['vsetry_peroid']; ?></td>
		<td><?php echo  $adv['Adv']['url']; ?></td>
        
        <td align='right'>
        <?php echo $this->Html->link('Edit', array('action'=>'edit_adversiters',  $adv['Adv']['id']), array('class'=>'edit'));?> 
        <?php echo $this->Html->link('Delete', array('action' => 'delete_adversiters',  $adv['Adv']['id']), array('class'=>'delete-btn'), 'Are you sure?' )?>

        </td>
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