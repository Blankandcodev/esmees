<?php class AdminController extends AppController {
	
	var $uses = array('User','Adv','Category','Product','Look','Commission','Page','Link','Widthdraw','Payment');
	
	var $helpers = array('Form', 'Country','Paginator' => array('Paginator'));
	
	var $components = array(
		'Paginator',
		'Image',
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
        //$this->User->recursive = 0;
       // $this->set('users', $this->paginate());
	   
	   $this->Paginator->settings = array('limit' => 10);
		$data = $this->Paginator->paginate('User');
		$this->set('users', $data);
		if ($this->request->is('post')) 
		{
		
		$this->Paginator->settings = array(
		'conditions' =>array('OR' =>array('User.name LIKE' => '%'.$this->request->data['product_fetch']['keyword'].'%','User.username LIKE' => '%'.$this->request->data['product_fetch']['keyword'].'%','User.member_id LIKE' => '%'.$this->request->data['product_fetch']['keyword'].'%','User.nickname LIKE' => '%'.$this->request->data['product_fetch']['keyword'].'%' )
	
		));
		$data = $this->Paginator->paginate('User');
		$this->set('users',$data);
		}
		else
		{
		 
		}
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
				if ($this->request->is('ajax')){
					$arr = array('status'=>'success', 'msg'=>'Product has been saved');
					echo json_encode($arr);
					exit;
				}else{
					$this->Session->setFlash(__('The Product has been saved.'), 'flash_success');
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
		
		$this->Paginator->settings = array('limit' => 50);
		$data = $this->Paginator->paginate('Product');
		$this->set('products', $data);
		if ($this->request->is('post')) 
		{
		
		$this->Paginator->settings = array(
		'conditions' =>array('OR' =>array('Product.name LIKE' => '%'.$this->request->data['product_fetch']['keyword'].'%','Product.sku LIKE' => '%'.$this->request->data['product_fetch']['keyword'].'%','Product.advetiser_name LIKE' => '%'.$this->request->data['product_fetch']['keyword'].'%','Product.mnf_name LIKE' => '%'.$this->request->data['product_fetch']['keyword'].'%' )
	
		));
		$data = $this->Paginator->paginate('Product');
		$this->set('products',$data);
		}
		else
		{
		 
		}
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
		
		$this->Paginator->settings = array('limit' => 10);
		$data = $this->Paginator->paginate('Adv');
		$this->set('advs',$data);
		
		if ($this->request->is('post')) 
		{
		
		$this->Paginator->settings = array(
		'conditions' => array('Adv.adv_name LIKE' => '%'.$this->request->data['product_fetch']['keyword'].'%', ),
		'limit' => 10
		);
		$data = $this->Paginator->paginate('Adv');
		$this->set('advs',$data);

		}
		else
		{
		 
		}
		
		
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
			 unset($this->request->data['Adv']['vsetry_peroid']);
			 unset($this->request->data['Adv']['url']);
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
	
	public function pages(){
		$this->set('pages', $this->Page->find('all'));
	}
	
	
	public function add_page(){
		if ($this->request->is('post')){
			
            if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash(__('The Pages has been saved.'), 'flash_success');
            } else 
			{
                $this->Session->setFlash(__('The Pages could not be saved. Please, try again.', 'flash_success'));
            }
			$this->redirect(array('action' => 'pages'));
        }
		
	}
	Public function edit_page($id = null){
		$this->Page->id = $id;
        if (empty($this->data))
        {
            $this->data = $this->Page->read();
		//	echo(this->Page->read());
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Page->save($this->request->data)) {
               
				 	$this->Session->setFlash(__('The Pages Name has been Updated.'), 'flash_success');
               // 
            } else {
                $this->Session->setFlash(__('The Pages could not be saved. Please, try again.'), 'flash_error');
            }
			$this->redirect($this->referer());
        } else {
            //$this->request->data = $this->Category->read(null, $id);
           // unset($this->request->data['Category']['name']);
        }
	}
	

	
	
	Public function delete_page($id = null)
	{
		$this->Page->delete($id);
      
		$this->Session->setFlash(__('The Pages with id: '.$id.' has been deleted.'), 'flash_success');
        $this->redirect(array('action'=>'view_pages'));
	}
	
	public function imgupload(){
		if ($this->request->is('post') || $this->request->is('put')) {
			$param_img = $this->request->params['form']['file'];
			$image_path = $this->Image->upload_image_and_thumbnail($param_img, "upload");
			$array = array(
				'filelink' => '/esmees/img/upload/'.$image_path,
				'thumb' => '/esmees/img/upload/small/'.$image_path,
				'image' => '/esmees/img/upload/big/'.$image_path
			);
			echo stripslashes(json_encode($array));
			
			$fp = WWW_ROOT.'/img/upload/data.json';
			$file = file_get_contents($fp);
			$data = json_decode($file);
			unset($file);
			$data[] = $array;
			pr($data);
			file_put_contents($fp, json_encode($data));
			unset($data);			
			exit;
		}
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

public function fetch_commissionls()
{
	$URI = 'https://reportws.linksynergy.com/downloadreport.php?bdate=20140301&edate=20140319&token=cd4f37dc86a07f7845f3d54a4c594f6fdd45a96355367de7348e3c77971aebd9&nid=1&reportid=12';
		
		$querryResult = file_get_contents($URI, false);
		$Data = str_getcsv($querryResult, "\n");
		
		$data = array();
		$array = array();
		$i = 0;
		 foreach ($Data as $key => $val)
			{
			if($key!=0)
			
			{
			$array[] = str_getcsv($val);
			
			$member_id = $array[$i][0];
            $merchant_id = $array[$i][1];
            $merchant_name = $array[$i][2];
            $order_id = $array[$i][3];
            $transaction_date = $array[$i][4];
            $transaction_time = $array[$i][5];
            $sku_number = $array[$i][6];
            $sales = $array[$i][7];
			$quantity = $array[$i][8];
            $commissions = $array[$i][9];
            $process_date = $array[$i][10];
            $process_time =$array[$i][11];
            
			$i++;
            
			$data['Link']['member_id'] = $member_id;
			$data['Link']['adv_id'] = $merchant_id;
			$data['Link']['merchant_name'] = $merchant_name;
			$data['Link']['order_id'] = $order_id;
			$data['Link']['transaction_date'] = $transaction_date;
			$data['Link']['transaction_time'] = $transaction_time;
			$data['Link']['sku_number'] = $sku_number;
			$data['Link']['sales'] = $sales;
			$data['Link']['quantity'] = $quantity;
			$data['Link']['commissions'] = $commissions;
			$data['Link']['process_date'] = $process_date;
			$data['Link']['process_time'] = $process_time;
			
			$this->Link->create();
			
			if ($this->Link->save($data)) {
			 $this->Session->setFlash(__('The Commission has been saved.'), 'flash_success');
			 
			
			}
			else
			{
				$this->Session->setFlash(__('The  Commission not be saved. Please, try again.', 'flash_success'));
			}
		}
			
		} 
		 $this->redirect(array('action'=>'fetch_commission'));
}
	
	public function fetch_commission(){
		
			$commission=$this->Link->find('all');
			$this->set('commissionList', $commission);
		
		
		
   }
   
  
   
   public function fetch_commission_cj()
   {
			$URI = 'https://commission-detail.api.cj.com/v3/commissions?date-type=posting&action-types=sale&website-ids=7386303';
			$context = stream_context_create(
			array(
				'http' => array(
					'method' => 'GET',
					'header' => 'Authorization:  009a4361d95c8e2bdce29187482ade06d25c54353bcbd8f380a2302f4358784d95be510873a64c2785e4bdd76a0876e68a8e6dfe46f462d5c585e420f2fa2c63c9/1ceeee775a48c02959c579de2b4c21736b25d0263b01a20a4a61473c1667da0523a54c62d9a9fb4fa0e5eaebb5f94f2a134d1d94e05ac90b26e3e27c09ef2801'
				)
			)
		);
		$querryResult = file_get_contents($URI, false, $context);
		$response = json_decode(json_encode((array) simplexml_load_string($querryResult)), 1);
		$this->set('commissionCj', $response);
   }
   
   
   public function generate_commissionls()
   {
			
			$data=$this->Link->find('all');
			$this->set('links', $data);
		
			$array = array();
			$i = 0;
			foreach ($data as $key => $val){
			$id = $val['Link']['id'];
			$member_id = $val['Link']['member_id'];
			$merchant_id= $val['Link']['adv_id'];
			$merchant_name= $val['Link']['merchant_name'];
			$order_id= $val['Link']['order_id'];
			$transaction_date= $val['Link']['transaction_date'];
			$transaction_time= $val['Link']['transaction_time'];
            $sku_number= $val['Link']['sku_number'];
			$sales= $val['Link']['sales'];
			$quantity= $val['Link']['quantity'];
			$process_date= $val['Link']['process_date'];
			$commissions= $val['Link']['commissions'];
			$process_time= $val['Link']['process_time'];
			$status= $val['Link']['status'];
			
			$i++;
			$member = preg_split("/[\s,-]+/", "$member_id");

			$data['Commission']['member_id'] = $member['1'];
			$data['Commission']['adversiter_id'] = $merchant_id;
			$data['Commission']['order_id'] = $order_id;
			$data['Commission']['transaction_date'] = $transaction_date;
			$data['Commission']['total_commission_earned'] = $commissions;
			if($status==0)
			{
			
				$adv=$this->Adv->find('all',array('conditions' => array('Adv.adv_id' => $merchant_id),'recursive' => 1));
				
				foreach ($adv as $key => $val)
				{
					$day = $val['Adv']['vested_period'];
					$trans_date = $transaction_date;
				
					
					$date = date_create($transaction_date);
					date_modify($date, "+".$day." days");
					$data['Commission']['v_date'] = date_format($date, 'Y-m-d');
				
			
			
				$this->Commission->create();
				
				if ($this->Commission->save($data)) {
				
					
				
					$this->Link->id    = $id;
					$this->Link->saveField('status', '1');
					$this->Session->setFlash(__('The Commission has been saved.'), 'flash_success');
					//$this->redirect(array('action' => 'fetch_commission'));
					$this->redirect($this->referer(array('action' => 'fetch_commission')));
					
					
			 
				}
				else
				{
					$this->Session->setFlash(__('The  Commission not be saved. Please, try again.', 'flash_success'));
				}
				}
			}
			else
			{
				//$this->Session->setFlash(__('The  Commission allready generated.', 'flash_success'));
				$this->Session->setFlash(__('The  Commission allready generated.'), 'flash_success');
			}
			
		}
		
			
   }
   
   
  public function widthdraw_request()
   {
		
	    $this->Paginator->settings = array('limit' => 10);
		$data = $this->Paginator->paginate('Widthdraw');
		$this->set('widthDraws', $data);
		
		$data = $this->Paginator->paginate('Widthdraw');
		$this->set('widthDraws',$data);
		
		
		
		
	}
	
	
	public function user_detail($id = null)
	{
			
		$userlist = $this->User->find('all', array('conditions' => array('User.id'=>$id)));
		$this->set('userDetails',$userlist);
		$member_id=$userlist[0]['User']['member_id'];	
		$total_vested = $this->Commission->find('all', array('conditions' => array(
			'Commission.member_id' => $member_id,
			'Commission.v_date <=' => date('Y-m-d')
		),'fields' => array('sum(Commission.total_commission_earned) as total_vested')));
		$this->set('vestedCommission',$total_vested);
		foreach ($total_vested as $key => $val){
	
			$vested_amount=$val[0]['total_vested'];
		
		 }
		$widthdraw_amount = $this->Payment->find('all', array('conditions' => array('Payment.member_id' => $member_id)));
		foreach ($widthdraw_amount as $key => $val){
			
			$payment=$val['Payment']['amount'];
		 }
			$avl_comm= $vested_amount - $payment;
			
			$sample_arr = array($avl_comm);
			$this->set('sample_arr',$sample_arr);
		
		
		$total_commision = $this->Commission->find('all', array('conditions' => array('Commission.member_id' => $member_id),'fields' => array('sum(Commission.total_commission_earned) as total')));
		$this->set('totalCommission',$total_commision);
		if ($this->request->is('post')) {
			
			$amount= $this->request->data['fetch_requset']['amount'];
			$remark= $this->request->data['fetch_requset']['remark'];
			
			
			 if($vested_amount <= $amount )
			 {
				 $this->Session->setFlash('The Widthdraw Amount could  be less then vesting Amount.', 'flash_success');
			 }
			 else
			 {
			
			
			
			 if ($this->Payment->save(array('amount'=>$amount,'remark'=>$remark, 'member_id'=>$member_id)))
				{
					
					
					 $this->Session->setFlash('The Widthdraw amount   .', 'flash_success');
					 
					 
					
				}
				else
				{
				 $this->Session->setFlash(__('The Widthdraw Request could not be sent. Please, try again.'));
				}
			}
		 }
		
		 }
		
           
     
		
		

	
	public function member_commission()
	{
		$this->Paginator->settings = array('limit' => 10);
		$data = $this->Paginator->paginate('Commission');
		$this->set('commissionList', $data);
	}
	
	
	
		
 
	
	
}



 
