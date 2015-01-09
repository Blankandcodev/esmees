<div class="page-container user-profile">	
	<div class="title">
		<a class="back-link" href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img class="left" src="<?php echo $this->webroot; ?>img/img17.png" /> &nbsp;Back</a>
	
	</div>
	<div class="look-listing">
			
			<h1 class="sec-title bordered">View All Widthdraw Request</h1>
	<?php if(!empty($widthLists)){ ?>
			<div class="listing cf">
			
				

<table class="dtable" cellspacing="0"> 
	<thead> 
		<tr> 
			 
			<th>
				Request	Date
			</th>
			<th>
					Amount
			</th>
			<th>
					Status
			</th>
			
			
		</tr> 
	</thead>
				

<?php foreach ($widthLists as $width): ?>
  
		<tr>
		<td>
				
				<?php echo  $width['Widthdraw']['request_date']; 
				
				
				
				?>		
        </td>
		<td>
			 <?php
			 
			 $amount= $this->Number->format( $width['Widthdraw']['widthdraw_request_amount'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
			 echo $amount;
			 ?>
        </td>
		<td>
		<?php 
			$status=$width['Widthdraw']['status'];
			if($status==0)
			{
				echo "<div style='color:red'>Pending</div>";
			}
			if($status==1)
			{
			  echo 	"<div style='color:green'>Accepted</div>";
			}
			

		?>
        </td>
	
    </tr>
     <?php endforeach; ?>  

</table>
			
				
			
			</div>
	<?php }else{
		echo '<div class="flash">No Widthdraw Request yet!</div>';
	} ?>
		</div>
	
	<div class="look-listing">
		
			<h1 class="sec-title bordered">View All Transaction Details</h1>
	<?php if(!empty($paymentLists)){ ?>
			<div class="listing cf">
				<table class="dtable" cellspacing="0"> 
	<thead> 
	
  
		<tr> 
			 
			<th>
				Transaction	Date
				
			</th>
			<th>
					Amount
			</th>
			<th>
					Status
			</th>
			<th>
					Remarks
			</th>
			
			
		</tr> 

	</thead>
				
	<?php foreach ($paymentLists as $pay): ?>

		<tr>
		<td>
				<?php echo  $pay['Payment']['generate_date']; ?>	
        </td>
		<td>
				<?php 
				$amount= $this->Number->format($pay['Payment']['amount'], array('places' => 2,'escape' => false, 'decimals' => '.','thousands' => ','));
				echo  $amount;
				
				?>		
        </td>
		<td>
			<?php 
			$status=$pay['Payment']['status'];
			if($status==0)
			{
				echo "<div style='color:green'>Paid</div>";
			}
			if($status==1)
			{
			  echo 	"<div style='color:green'>Paid</div>";
			}
			

		?>
        </td>
		<td>
			<?php echo  $pay['Payment']['remarks']; ?>		
        </td>
	
    </tr>
 <?php endforeach; ?>  

</table>
			
			</div>
	<?php }else{
		echo '<div class="flash">No Transaction Generated yet!</div>';
	} ?>
		</div>