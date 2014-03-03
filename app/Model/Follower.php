<?php
class Follower extends AppModel 
{
 Public $name = 'Follower';
	var $actsAs = array('Containable');
 


public $belongsTo = array(
	'followedby' => array(
		'className' => 'User',
		'foreignKey' => 'user_id'
	),
	'followed' => array(
		'className' => 'User',
		'foreignKey' => 'follow_id'
	)
);

}
?>