<?php
class Wishlist extends AppModel 
{
 Public $name = 'Wishlist';
 public $hasMany = array(  
	'Wishlist' => array(
		'className' => 'Wishlist',
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