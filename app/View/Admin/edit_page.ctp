<div class="title-row">
	<a class="button primary title-btn" href="<?php echo $this->Html->url(array('action'=>'pages'), array('class'=>'add')); ?>"> View all Pages</a>
	<h1 class="title">Edit Page</h1>
</div>
<?php echo $this->Form->create('Page'); ?>
	<fieldset>
		<?php echo $this->Form->input('name', array('label'=>'Page title','class'=>'full required', 'id'=>'pgtitle')); ?>
		<?php echo $this->Form->input('id', array('type'=>'hidden')); ?>
		<?php echo $this->Form->input('description', array('label'=>'Description', 'type'=>'textarea', 'rows'=>20, 'class'=>'editor full required'));?>
		<?php echo $this->Form->submit('Save', array('class'=>'primary button'));?>
	</fieldset>
<?php echo $this->Form->end(); ?>

<script>
	$('#pgtitle').blur(function(){
		var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-z0-9]+/g,'-');
		$('input.slug').val(Text);
	})
</script>