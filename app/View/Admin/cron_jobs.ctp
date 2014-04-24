<div class="title-row">
	<h1>Cron Job</h1>
	<h3>
	 Note:-	The admin can  manually enter the date cron runs fetch data.
	</h3>
	
	
</div>

<?php echo $this->Form->create('fetch_reports'); ?>

		<fieldset>
	
		
	
		

     
    <?php echo $this->Form->input('sdate', array('label'=>'Start Date(yyyymmdd)','placeholder'=>'date format ex(20140301)', 'type'=>'text', 'class'=>'required'));?>
	<?php echo $this->Form->input('edate', array('label'=>'End Date(yyyymmdd)','placeholder'=>'date format ex(20140330)', 'type'=>'text', 'class'=>'required'));?>
	
	<?php echo $this->Form->Submit('fetch Data',array('class'=>'button primary left')); ?>
	
	</fieldset>
	<?php echo $this->Form->end(); ?>
	
	
	</div>
<div class="title-row">
	
	
	<h1 class="title">Email
	
	<a class="button primary title-btn" style="align:left" href="<?php echo $this->Html->url(array('controller' =>'Cron','action' => 'sendmail'), array('class'=>'add')); ?>"> Send Mail !</a>
</div>