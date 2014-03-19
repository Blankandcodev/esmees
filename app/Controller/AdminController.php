<?php class AdminController extends AppController {
	
	var $uses = array('User','Adv','Category','Product','Look','Commission','Page');
	
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
			'website-id=7386303'.	
			$query_string;
		$context = stream_context_create(
			array(
				'http' => array(
					'method' => 'GET',
					'header' => 'Authorization:  009a4361d95c8e2bdce29187482ade06d25c54353bcbd8f380a2302f4358784d95be510873a64c2785e4bdd76a0876e68a8e6dfe46f462d5c585e420f2fa2c63c9/1ceeee775a48c02959c579de2b4c21736b25d0263b01a20a4a61473c1667da0523a54c62d9a9fb4fa0e5eaebb5f94f2a134d1d94e05ac90b26e3e27c09ef2801'
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
      $this->User->delete($id);
       
		$this->Session->setFlash(__('The User with id: '.$id.' has been deleted.'), 'flash_success');
        $this->redirect(array('action'=>'view_user'));
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
		$AllCats = $this->Category->generateTreeList(null, null, null, '-- ');
		$catalist = array();
		foreach($AllCats as $id=>$cat){
			$catalist[$id] = $cat;
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
	
	public function view_commission()
	{
			$commission=$this->Commission->find('all');
			$this->set('commissionList', $commission);
			
	}
	
	public function view_pages()
	{
		$this->set('pages', $this->Page->find('all'));
	}
	
	
	public function add_pages()
	{
		if ($this->request->is('post')) {
			
            if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash(__('The Pages has been saved.'), 'flash_success');
               
                //$this->redirect(array('action' => 'index'));
            } else 
			{
                $this->Session->setFlash(__('The Pages could not be saved. Please, try again.', 'flash_success'));
            }
			 unset($this->request->data['Page']['name']);
			 unset($this->request->data['Page']['description']);
        }
		
	}
	Public function edit_pages($id = null)
	{
		$this->Page->id = $id;
        if (empty($this->data))
        {
            $this->data = $this->Page->read();
		//	echo(this->Page->read());
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Page->save($this->request->data)) {
               
				 	$this->Session->setFlash(__('The Pages Name has been Updated.'), 'flash_success');
               // $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Pages could not be saved. Please, try again.'), 'flash_error');
            }
        } else {
            //$this->request->data = $this->Category->read(null, $id);
           // unset($this->request->data['Category']['name']);
        }
	}
	

	
	
	Public function delete_pages($id = null)
	{
		$this->Page->delete($id);
      
		$this->Session->setFlash(__('The Pages with id: '.$id.' has been deleted.'), 'flash_success');
        $this->redirect(array('action'=>'view_pages'));
	}
	
	
	
	
	//--------------------------------------------Banners-----------------------------------
	
	public function add_banners()
	{
		if ($this->request->is('post')) {
			
            if ($this->Banner->save($this->request->data)) {
				$this->Session->setFlash(__('The Pages has been saved.'), 'flash_success');
               
                //$this->redirect(array('action' => 'index'));
            } else 
			{
                $this->Session->setFlash(__('The Pages could not be saved. Please, try again.', 'flash_success'));
            }
			// unset($this->request->data['Page']['name']);
			// unset($this->request->data['Page']['description']);
        }
	}
	
	
		public function fetch_commission(){
			$URI = 'https://reportws.linksynergy.com/downloadreport.php?bdate=20140301&edate=20140319&token=cd4f37dc86a07f7845f3d54a4c594f6fdd45a96355367de7348e3c77971aebd9&nid=1&reportid=12';
		/*$context = stream_context_create(
			array(
				'http' => array(
					'method' => 'GET',
					'header' => 'Authorization:'
				)
			)
		);*/
		//echo $URI;
		$querryResult = file_get_contents($URI, false);
		$Data = str_getcsv($querryResult, "\n");
		//print_r($Data);
	
		
		
		
		
		$i = 0;
		foreach($Data as $row)
		{
		
		
	
		
		//pr(str_getcsv($row)); //parse the items in rows 
		
		$reports=array(str_getcsv($row));
		
		
		pr($reports);
		$mid=$reports[0][1];
		$mid1=$reports[0][2];
		$mid2=$reports[0][3];
		$mid3=$reports[0][4];
		pr($mid);
		Pr($mid1);
		pr($mid2);
		pr($mid3);
		
	

		 

			
			
			 $this->request->data['Linkshares'][$i]['member_id'] = $reports[0][1];
			$this->request->data['Linkshares'][$i]['merchant_id'] = $reports[0][2];
			//$this->request->data['Linkshares'][$i]['merchant_name'] = $row[2]; 
			// $this->request->data['Linkshares'][$i]['order_id'] = $row[3]; 
			// $this->request->data['Linkshares'][$i]['transaction_date'] = $row[4]; 
			// $this->request->data['Linkshares'][$i]['transaction_time'] = $row[5]; 
			// $this->request->data['Linkshares'][$i]['sku_number'] = $row[6]; 
			// $this->request->data['Linkshares'][$i]['sales'] = $row[7]; 
			// $this->request->data['Linkshares'][$i]['quantity'] = $row[8]; 
			// $this->request->data['Linkshares'][$i]['commissions'] = $row[9]; 
			// $this->request->data['Linkshares'][$i]['process_date'] = $row[10];
			// $this->request->data['Linkshares'][$i]['process_time'] = $row[11];
			// pr($this->request->data['Linkshares'][$i]['member_id']);
			 
		$i++;
		}
		
		 
		
	
	
	

	
	
	
		
   }
	
	
}



 
