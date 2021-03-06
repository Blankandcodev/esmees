<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $uses = array('Banner','Page');
	var $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'loginAction' => array('controller' => 'users', 'action' => 'login'),
			'authError' => 'You must be logged in to view this page.',
			'scope' => array('User.status' => 1),
            'authorize' => array('Controller')
        )
    );
	
    public function isAuthorized($user){
		if (isset($user['role']) && $user['role'] == 0){
			return 'user';
		}else{
			return 'admin';
		}
	}
	
    public function beforeFilter(){
        if($this->Auth->user('role') == 0){
			$this->set('loggeduser', $this->Auth->user());
		}else{
			$this->set('loggedadmin', $this->Auth->user());
		}
		$this->user = $this->Auth->user();
		$this->Auth->allow();
		
		
		$headerbanners=$this->Banner->find('first',  array('conditions'=>array('Banner.pages'=>'header','Banner.status'=>1),'limit'=>1,array('order' => array('Banner.created' => 'DESC'))));
		$this->set('topbnr', $headerbanners);
    }
	public function SimpleXML2Array($xml){
		$array = (array)$xml;
	
		//recursive Parser
		foreach ($array as $key => $value){
			if(strpos(get_class($value),"SimpleXML")!==false){
				$array[$key] = $this->SimpleXML2Array($value);
			}
		}
	
		return $array;
	}
	function getCurrentUser() {
	  // for CakePHP 1.x:
	  App::import('Component','Session');
	  $Session = new SessionComponent();

	  // for CakePHP 2.x:
	  App::uses('CakeSession', 'Model/Datasource');
	  $Session = new CakeSession();


	  $user = $Session->read('Auth.User');

	  return $user;
	}
}
