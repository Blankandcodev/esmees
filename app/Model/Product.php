<?php
App::uses('AuthComponent', 'Controller/Component');
class Product extends AppModel {
    public $name = 'Product';
	var $actsAs = array('Containable');
	
	public $belongsTo = array(
       
        'Look' => array(
            'className' => 'Look',
            'foreignKey' => 'id'
        ),
		'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'parent_id'
        )
    );
	
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