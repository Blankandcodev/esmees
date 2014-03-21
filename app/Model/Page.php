<?php
class Page extends AppModel {
	Public $name = 'Page';
	public $validate = array(
		'slug' => array(
			'isUnique' => array(
				'rule'    => 'isUnique',
				'on'      => 'create',
				'message' => 'This slug has already been taken.'
			)
		)
	);
}
?>