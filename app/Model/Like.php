<?php
class Like extends AppModel{
		var $actsAs = array('Containable');
 Public $name = 'Like';
	  public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        ),
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id'
        )
		,
		  'Look' => array(
            'className' => 'Look',
            'foreignKey' => 'product_id'
        )
		
		
		
		
    );




}
?>