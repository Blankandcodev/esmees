<?php
class Like extends AppModel 
{
 Public $name = 'Like';
 public $hasMany = array(  
	'Like' => array(
		'className' => 'Like',
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
		,
		  'Look' => array(
            'className' => 'Look',
            'foreignKey' => 'product_id'
        )
		
		
		
		
    );




}
?>