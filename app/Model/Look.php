<?php
	class Look extends AppModel{
		var $actsAs = array('Containable');
	 Public $name = 'Look';
	 public $hasMany = array(
		 'Like' => array(
            'className' => 'Like',
			'counterCache' => true,
            'foreignKey' => 'product_id'
        )
    );
	
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        ),
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id'
        )
    );
	
	}
?>