<?php
class Follower extends AppModel 
{
 Public $name = 'Follower';
 

 
 public $hasMany = array(  
	'Follower' => array(
		'className' => 'Follower',
		'foreignKey' => 'user_id'
	)
);

public $belongsTo = array(
	'User' => array(
		'className' => 'User',
		'foreignKey' => 'user_id'
	),
	'Look' => array(
		'className' => 'Look',
		'foreignKey' => 'user_id'
	)
	
);

}
?>