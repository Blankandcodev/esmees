<?php
App::uses('AuthComponent', 'Controller/Component');
class Order extends AppModel {
	public $actsAs = array('Containable');
    public $name = 'Order';

	
	
	public $hasMany = array(
      
        'Order' => array(
            'className' => 'Order',
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