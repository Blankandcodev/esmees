<?php
class Commission extends AppModel 
{
var $actsAs = array('Containable');
Public $name = 'Commission';
 public $hasMany = array(
		 'Commission' => array(
            'className' => 'Commission',
			'counterCache' => true,
            'foreignKey' => 'user_id'
        )
    );
	
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
		
		);
}
?>