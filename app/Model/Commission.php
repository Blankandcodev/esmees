<?php
class Commission extends AppModel 
{
var $actsAs = array('Containable');
Public $name = 'Commission';
var $virtualFields = array('total' => 'ROUND(SUM(Commission.user_commission), 2)');
    
	
}
?>