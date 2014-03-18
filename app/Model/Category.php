<?php
class Category extends AppModel {
    var $name = 'Category';
    var $actsAs = array('Tree');
	 public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A category name is required'
            )
        )
    );
	
}