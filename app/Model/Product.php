<?php
App::uses('AuthComponent', 'Controller/Component');
class Product extends AppModel {
    public $name = 'Product';
	public $validate = array(
		'sku' => array(
			'isUnique' => array (
				'rule' => 'isUnique',
				'message' => 'This person name already exists.',
				'on' => 'create'
			)
        )
	);
}