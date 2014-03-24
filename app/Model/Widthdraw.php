<?php
class Widthdraw extends AppModel 
{
var $actsAs = array('Containable');
Public $name = 'Widthdraw';
 public $hasMany = array(
		 'Widthdraw' => array(
            'className' => 'Widthdraw',
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