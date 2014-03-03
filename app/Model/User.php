<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
	var $actsAs = array('Containable');
    public $name = 'User';
	var  $user_name;
	public $hasMany = array('Order');
	
	
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            ),
			'isUnique' => array (
				'rule' => 'isUnique',
				'message' => 'This person name already exists.',
				'on' => 'create'
			)
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )
    );
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
}