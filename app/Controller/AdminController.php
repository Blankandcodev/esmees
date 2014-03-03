<?php class AdminController extends AppController {
	
	var $uses = array('User','Adv','Category','Product','Look');
	
	var $helpers = array('Form', 'Country','Paginator' => array('Paginator'));
	
	var $components = array(
		'Paginator',
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'admin', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'admin', 'action' => 'login'),
            'loginAction' => array('controller' => 'admin', 'action' => 'login'),
			'authError' => 'You must be logged in to view this page.',
            'authorize' => array('Controller')
        )
    );
	
	var $layout = 'admin';
	
	public $paginate = array(
		'limit' => 10
	);
// -------------------------------- Starts User Function ---------------------------------------------	
    public function beforeFilter() {
        //parent::beforeFilter();
        $this->Auth->allow('login');
    }
	
    public function isAuthorized($user){
		$userType = parent::isAuthorized($user);
		if ($userType == 'admin'){
			return true;
		}else{
			$this->Session->setFlash(__('Invalid username or password, try again'));
			$this->redirect($this->Auth->logout());
		}
	}

    public function login() {
		$this->layout = 'blank';
		print_r($this->Auth->user());
        if ($this->request->is('post')) {
            if ($this->Auth->login()){
                $this->Session->setFlash(__('You are successfully logged in'), 'flash_success');
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Invalid username or password, try again'), 'flash_error');
            }
        }
    }

    public function logout(){
		$this->Session->setFlash(__('You are successfully logged Out'), 'flash_success');
        $this->redirect($this->Auth->logout());
    }


    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
	 public function view_user() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
//---------------------------------------------End User Function-------------------------------------
	public function sample() {

	}
//-------------------------------------------- Starts Product Function ------------------------------	
	public function ConnectToCJ($params = array()){
		$query_string = '';
		$params['keywords'] = $params['keywords'] .'+'. $params['category'];
		$params['affiliate'] = '';
		$params['category'] = '';
		foreach($params as $param=>$val){
			if($val){
				if($param == 'adv_id'){
					$query_string .= "&advertiser-ids=".$val;
				}else if($param == 'pagenumber'){
					$query_string .= "&page-number=".$val;					
				}else if($param == 'record'){
					$query_string .= "&records-per-page=".$val;					
				}else{
					$query_string .= "&".$param."=".$val;	
				}
			}
		}
		global $sort_order, $sort_by;
		$URI = 'https://product-search.api.cj.com/v2/product-search?'.
			'website-id=7352624'.	
			$query_string;
		$context = stream_context_create(
			array(
				'http' => array(
					'method' => 'GET',
					'header' => 'Authorization: 0089e5a92fded5d22f51818d40b15e2749c4f47dbeebceb1cb332fae992bbde44e493e4c4d509e01f4936dc08f459cde3e3a808412b8ce61fd345641a63d964b65/75d4887d1f2c162dd8b79abb6cd3c73e81cd68a57b596312fee9ff876299203b83a70055a94acfbafeec25fbf6fd272653d85f78e2cd49b8c5e3b9d3e0211101'
				)
			)
		);
		
		// $response = new SimpleXMLElement(file_get_contents($URI, false, $context));
		$querryResult = file_get_contents($URI, false, $context);
		$response = json_decode(json_encode((array) simplexml_load_string($querryResult)), 1);
		return $response;
	}
	
	public function add_product(){
		if ($this->request->is('post')){
			$data = array_shift($this->request->data);
			
			if ($this->Product->save($data)){
				$this->Session->setFlash(__('The Product has been saved.'), 'flash_success');
				if ($this->request->is('ajax')){
					$arr = array('status'=>'success', 'msg'=>'Product has been saved');
					echo json_encode($arr);
					exit;
				}else{
					$this->redirect($this->referer(array('action' => 'add_cjproduct')));
				}
			}else{
				if ($this->request->is('ajax')){
					$arr = array('status'=>'error', 'msg'=>'This product is already exist');
					echo json_encode($arr);
					exit;
				}else{
					$this->Session->setFlash(__('This product is already exist.'), 'flash_error');
				}
			}
		}
	}
	
	public function add_products(){
		$advList = array('Select Affiliate Program first');
	
		$AllCats = $this->Category->children(1);
		$catalist = array('Select Category');
		foreach($AllCats as $cat){
			$cat =$cat['Category'];
			$catalist[$cat['id']] = $cat['name'];
		}
		$this->set('categoryList', $catalist);
		
		if ($this->request->is('post')){
			$params = array_shift($this->request->data);
						
			$aflType = $params['affiliate'];
			$advlists = $this->Adv->find('all', array('conditions' => array('Adv.afflitate_type'=>$aflType)));
			foreach($advlists as $adv){
				$adv = $adv['Adv'];
				$advList[$adv['adv_id']] = $adv['adv_name'];
			}
			
			$this->set('searchdata', $params);
			
			
			if(!empty($params['affiliate'])){
				$response = '';
				if($params['affiliate'] == 'LS'){
					$response = $this->ConnectToLN($params);
					$response['affiliate'] = $params['affiliate'];
					$this->set('products', $response);
					
				}else if($params['affiliate'] == 'CJ'){
					$response = $this->ConnectToCJ($params);
					$response = array_shift($response);
					$response['affiliate'] = $params['affiliate'];
					$this->set('products', $response);
					//pr(array_shift($response));
//					die;
				}
			}
			
		}
		$this->set('advList', $advList);
	}
	
	public function get_merchantlist(){
		if ($this->request->is('ajax')){
			$qstr = $this->request->query;
			if(!empty($qstr['afl'])){
				$aflType = $qstr['afl'];
				$advlists = $this->Adv->find('all', array('conditions' => array('Adv.afflitate_type'=>$aflType)));
				$response = '<option value="0">Select</option>';
				foreach($advlists as $adv){
					$adv =$adv['Adv'];
					$response .= '<option value="'.$adv['adv_id'].'">'.$adv['adv_name'].'</option>';
				}
				echo $response;
				exit;
			}else{
				echo "ERROR";
				exit;
			}
		}
		else{
			$this->redirect(array('action' => 'index'));
		}
	}
		
	function edit_product($id = null) {
	
		
		$this->Product->id = $id;
		$AllCats = $this->Category->children(1);
		$catalist = array();
		foreach($AllCats as $cat){
			$cat =$cat['Category'];
			$catalist[$cat['id']] = $cat['name'];
		}
		$this->set('categoryList', $catalist);
        if (empty($this->data))
        {
            $this->data = $this->Product->read();
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('The Product  has been Updated'));
               // $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Product could not be saved. Please, try again.'), 'flash_error');
            }
        } else {
            $this->request->data = $this->Product->read(null, $id);
		}
	}
	
	function delete_product($id)
    {
    	$this->Product->delete($id);
        $this->Session->setFlash('The Product with id: '.$id.' has been deleted.');
        $this->redirect(array('action'=>'view_products'));
		
    }
	
	public function view_products(){
		$this->Paginator->settings = $this->paginate;
		$data = $this->Paginator->paginate('Product');
		$this->set('products', $data);
    }
	
	public function ConnectToLN($params = array()){
		$query_string = '';
					
		$params['affiliate'] = '';
		foreach($params as $param=>$val){
			if($val){
				if($param == 'keywords'){
					$query_string .= "&keyword=".$val;
				}else if($param == 'adv_id'){
					$query_string .= "&mid=".$val;
				}else if($param == 'category'){
					$query_string .= "&cat=".$val;
				}else if($param == 'record'){
					$query_string .= "&max=".$val;
				}else{
					$query_string .= "&".$param."=".$val;
				}
			}
		}
		$URI = 'http://productsearch.linksynergy.com/productsearch?'.
			'&token=d279e4bb38551f715b664fe212adba01e22bf72bf8273cef793b56301a3d6050'.
			$query_string.'&MaxResults=20';
			
			$context = stream_context_create(
			array(
				'http' => array(
					'method' => 'GET',
					
					'header' => 'Authorization:'
				)
			)
		);
		$querryResult = file_get_contents($URI, false, $context);
		$response = json_decode(json_encode((array) simplexml_load_string($querryResult)), 1);
		return $response;
   }
//----------------------------------------------------End Product Function-------------------------------

	/*  MANAGE ADMIN */
    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add(){
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.', 'flash_success'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash_error');
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

//------------------------------------------- Start Adversiters ----------------------------
	
	

	function view_adversiters(){
		$this->set('advs', $this->Adv->find('all'));
	}
	function add_adversiters(){
		if ($this->request->is('post')) {
            if ($this->Adv->save($this->request->data)) {
				$this->Session->setFlash(__('The Adversiters has been saved.'), 'flash_success');
               
                //$this->redirect(array('action' => 'index'));
            } else 
			{
                $this->Session->setFlash(__('The Adversiters could not be saved. Please, try again.', 'flash_success'));
            }
			 unset($this->request->data['Adv']['adv_id']);
			 unset($this->request->data['Adv']['adv_name']);
        }
    }
	function edit_adversiters($id = null) {
       $this->Adv->id = $id;
        if (empty($this->data))
        {
            $this->data = $this->Adv->read();
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Adv->save($this->request->data)) {
                $this->Session->setFlash(__('The Merchant  has been Updated'),'flash_success');
				
               // $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Merchant could not be saved. Please, try again.'), 'flash_error');
            }
        } else {
            $this->request->data = $this->Adv->read(null, $id);
		}
    }
	
	function delete_adversiters($id)
    {
    	$this->Adv->delete($id);
      
		$this->Session->setFlash(__('The Merchant with id: '.$id.' has been deleted.'), 'flash_success');
        $this->redirect(array('action'=>'view_adversiters'));
		
    }
	
//----------------------------------------------End Adversiter Function----------------------
//--------------------------------------------- Start Category Function----------------------	
	
   
	public function view_category(){
		$this->set('categories', $this->Category->generateTreeList(null, null, null, '&ndash;&ndash;&nbsp;&nbsp;'
        ));
	}
	public function add_category(){
		$AllCats = $this->Category->find('all');
		$catalist = array();
		foreach($AllCats as $cat){
			$cat =$cat['Category'];
			$catalist[$cat['id']] = $cat['name'];
		}
		$this->set('categoryList', $catalist);
		
		if ($this->request->is('post')) {
            if (!$this->Category->save($this->request->data)){               
				$this->Session->setFlash(__('The category could not be created. Please, try again.'), 'flash_error');
            }
			$this->Session->setFlash(__('The Category has been saved.'), 'flash_success');				
            $this->redirect($this->referer());
        }
    }
	function edit_category($id = null) {
        
		$this->Category->id = $id;
        if (empty($this->data))
        {
            $this->data = $this->Category->read();
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Category->save($this->request->data)) {
               
				 	$this->Session->setFlash(__('The Category Name has been Updated.'), 'flash_success');
               // $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash_error');
            }
        } else {
            //$this->request->data = $this->Category->read(null, $id);
           // unset($this->request->data['Category']['name']);
        }
    }
	function delete_category($id)
    {
    	$this->Category->delete($id);
       
		$this->Session->setFlash(__('The Category with id: '.$id.' has been deleted.'), 'flash_success');
        $this->redirect(array('action'=>'view_category'));
    }
	
	function view_looksimage($id)
	{
			$looks=$this->Look->find('all', array('conditions' => array('Look.status' => 0,'Look.user_id' => $id )));
			$this->set('looks', $looks);
		
	}
}
//------------------------------------------------End Category Function---------------------------

//------------------------------------------------User Looks Function------------------------------

 
