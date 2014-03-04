<?php
class Wishlist extends AppModel 
{
var $actsAs = array('Containable');
Public $name = 'Wishlist';

public $belongsTo = array(
	'User' => array(
		'className' => 'User',
		'foreignKey' => 'user_id'
	),
	'Product' => array(
		'className' => 'Product',
		'conditions' => array('Wishlist.type = 0'),
		'foreignKey' => 'product_id'
	),
	'Look' => array(
		'className' => 'Look',
		'conditions' => array('Wishlist.type = 1'),
		'foreignKey' => 'product_id'
	)
	
);

}
?>