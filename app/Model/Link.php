<?php
class Link extends AppModel 
{
var $actsAs = array('Containable');
Public $name = 'Link';
public $hasMany = array(
			'Link' => array(
            'className' => 'Link',
			'counterCache' => true,
            'foreignKey' => 'adv_id'
        )
    );
	
  
		

}
?>