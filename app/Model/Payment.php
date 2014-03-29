<?php
class Payment extends AppModel 
{
var $actsAs = array('Containable');
Public $name = 'Payment';

 public $hasMany = array(
		 'Payment' => array(
            'className' => 'Payment',
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