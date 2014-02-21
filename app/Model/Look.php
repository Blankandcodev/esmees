<?php
	class Look extends AppModel 
	{
	 Public $name = 'Look';
	// var $virtualFields = array('product_count' => 'COUNT(Look.product_id)');
	 public $hasMany = array(
      
        'Look' => array(
            'className' => 'Look',
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