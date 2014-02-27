<?php
	class Look extends AppModel 
	{
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
        ),
		 'Wishlist' => array(
            'className' => 'Wishlist',
			'conditions' => array('Wishlist.type' => '1'),
            'foreignKey' => 'product_id'
        )		
    );
	
	}
?>