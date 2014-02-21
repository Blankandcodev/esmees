<?php
class Category extends AppModel {
    var $name = 'Category';
    var $actsAs = array('Tree');
	 public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A category name is required'
            ),
			'isUnique' => array (
				'rule' => 'isUnique',
				'message' => 'This category name already exists.',
				'on' => 'create'
			)
        ),
        
    );
	
}