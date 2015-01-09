<div class="title-row">
	
	<h1 class="title">All type of  Reports Afflitate Program(csv file)</h1>
</div>
<?php echo $this->Form->create('fetch_reports'); ?>

		<fieldset>
	<?php
	echo $this->Form->input('afflitate_type', array('label'=>'Afflitate type', 'type'=>'select', 'options' => array('CJ' => 'Commission Junction', 'LS' => 'Link Share'
        )));?>
		
	 <?php
	echo $this->Form->input('report_type', array('label'=>'Report Type', 'type'=>'select', 'options' => array('4' =>'Sales & Activity','5'=>'Revenue','7'=>'Individual Item','8'=>'Product Success','9'=>'Program Level','10'=>'Non-Commissionable Sales Report','11'=>'Signature Activity Report','12'=>'Signature Order','14'=>'Media Optimization Report'
        )));?>
		

     
    <?php echo $this->Form->input('sdate', array('label'=>'Start Date(yyyymmdd)','placeholder'=>'date format ex(20140301)', 'type'=>'text', 'class'=>'required'));?>
	<?php echo $this->Form->input('edate', array('label'=>'End Date(yyyymmdd)','placeholder'=>'date format ex(20140330)', 'type'=>'text', 'class'=>'required'));?>
	
	<?php echo $this->Form->Submit('Download File',array('class'=>'button primary left')); ?>
	
	</fieldset>
	<?php echo $this->Form->end(); ?>
	
	
	</div>
