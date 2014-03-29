<div class="users form">
<?php echo $this->Form->create('bank', array('class'=>'cform')); ?>
    <fieldset>
        <legend><?php echo __('Bank Account  Details'); ?></legend>
    <?php
        echo $this->Form->input('role', array('value'=>'0', 'type'=>'hidden'));
		echo $this->Form->input('bankname',  array('label'=>'Bank Name','maxLength'=>'50',  'type'=>'text', 'class'=>'required', 'label'=>'Bank Name'));
        echo $this->Form->input('acnumber',  array('label'=>'Bank Account Number','maxLength'=>'50',  'type'=>'text', 'required'));
		echo $this->Form->input('ssnumber',  array('label'=>'Social Security Number','maxLength'=>'50',  'type'=>'text'));
		echo $this->Form->input('brtnumber',  array('label'=>'Bank Routing Number','maxLength'=>'50',  'type'=>'text', 'required'));
       
        
		
    ?>
	<?php echo $this->Form->submit('Submit', array('class'=>'primary button med')) ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>