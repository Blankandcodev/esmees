<ul class="breadcrumb">
	<li>
		<?php
			echo $this->Html->link( '<i class="icon-home"></i>', array(
					'plugin' => 'autotask'
				,	'controller' => 'dashboards'
				,	'action' => 'index'
			), array(
					'escape' => false
			) );
		?> <span class="divider">/</span>
	</li>
	<li>
		<?php
			echo $this->Html->link( 'Resources', array(
					'plugin' => 'autotask'
				,	'controller' => 'resources'
				,	'action' => 'index'
			) );
		?> <span class="divider">/</span>
	</li>
	<li class="active"><?php echo $this->request->data['Resource']['name']; ?></li>
</ul>

<?php
	echo $this->Form->create( 'Autotask.Resource', array(
			'class' => 'form-horizontal'
		,	'inputDefaults' => array(
					'div' => array(
							'class' => 'control-group input'
					)
				,	'label' => array(
							'class' => 'control-label'
					)
				,	'between' => '<div class="controls">'
				,	'after' => '</div>'
				,	'class' => 'span2'
			)
	) );

	echo $this->Form->input( 'Resource.id' );

	echo $this->Form->input( 'Resource.name', array(
			'class' => 'span3'
	) );

	echo $this->Form->submit( 'Save', array(
			'class' => 'btn btn-success'
	) );

	echo $this->Form->end();