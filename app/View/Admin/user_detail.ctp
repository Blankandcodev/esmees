<?php
	
		 foreach ($vestedCommission as $key => $val){
		  $total_vested= $this->Number->format($val[0]['total_vested'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
	}
	
	 foreach ($totalCommission as $key => $val){
		  $total_commission= $this->Number->format($val[0]['total'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
		  
		  
	}
	
	
	
?>



	


<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'widthdraw_request'), array('class'=>'add')); ?>"> View WidthDraw Request </a>
	<h1 class="title">WidthDraw Commission</h1>
</div>
<?php echo $this->Form->create('user_details'); ?>



		<fieldset>

    
     
    <?php echo $this->Form->input('heading', array('label'=>'Total Commission Earned ', 'type'=>'text', 'class'=>'required','value'=>$total_commission ));?>
  
	<?php echo $this->Form->input('description', array('label'=>'Total Amount Vested', 'type'=>'text', 'class'=>'required','value'=>$total_vested));?>
	
	<?php echo $this->Form->input('currency', array('label'=>'Select Currency', 'type'=>'select', 'options' => array('USD' => 'USD','EUR' => 'EUR'
        )));?>
	
	<?php echo $this->Form->input('description', array('label'=>'WidthDraw Amount', 'type'=>'text', 'class'=>'required'));?>
	
	<?php echo $this->Form->input('description', array('label'=>'Remark', 'type'=>'textarea', 'class'=>'required'));?>
	
	<?php echo $this->Form->Submit('WidthDraw Commission',array('class'=>'button primary left')); ?>
	
	</fieldset>
	<?php echo $this->Form->end(); ?>
  
	
	</div>
	
	
<table class="dtable" cellspacing="0"> 
	<thead> 
		<tr> 
			 
			<th>
			
				M.ID
			
			</th> 
			<th>
				 Email Address
			
			</th> 
			
			<th>
				Name
			
			</th>
			
			
			<th>
				Address
			</th>
			<th>
				City
			</th>
			<th>
				State
			
			</th>
			
			
			
			<th>
				SS/Number
			
			</th>
			
			<th>
				Bank Name
			
			</th>
			
			<th>
				Ac/Number
			
			</th>
			<th>
				 Routing Number
			
			</th>
			<th>
				Status
			
			</th>
			<th>
			
			
			</th>
			
			
		</tr> 
	</thead>
				


    <?php foreach ($userDetails as $user): ?>
    <tr>
        
        <td><?php echo  $user['User']['member_id']; ?></td>
        <td><?php echo  $user['User']['username']; ?></td>
		<td><?php echo  $user['User']['name']; ?></td>
        <td><?php echo  $user['User']['address']; ?></td>
		<td><?php echo  $user['User']['city']; ?></td>
        <td><?php echo  $user['User']['state']; ?></td>
		<td><?php echo  $user['User']['ss_number']; ?></td>
        <td><?php echo  $user['User']['bankname']; ?></td>
		<td><?php echo  $user['User']['bankaccount_no']; ?></td>
        <td><?php echo  $user['User']['bankrouting_no']; ?></td>
		<td><?php echo  $user['User']['status']; ?></td>
	
		
	
      
        <td align='right'>
       


        </td>
	
    </tr>
    <?php endforeach; ?>

</table>
	

