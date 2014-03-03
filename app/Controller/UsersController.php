<?php class UsersController extends AppController {
	var $uses = array('User','Product','Look','Wishlist','Order','Follower','Like');
	var $helpers = array('Form', 'Country','Paginator' => array('Paginator'));
	public $components = array('Image', 'Email','Paginator');
	public $paginate = array(
		'limit' => 10
	);
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny();
        $this->Auth->allow('add', 'login', 'register', 'followers', 'profile', 'sendNewUserMail');
    }
	
    public function isAuthorized($user){
		$userType = parent::isAuthorized($user);
		if ($userType == 'user'){
			return true;
		}else{
			$this->Session->setFlash(__('Wrong Login Area'));
			$this->redirect($this->Auth->logout());
		}
	}
	
	public function index()	{
	if(!empty($this->user['id']))
		{
			$this->set('user', $this->User->read(null,$this->user['id']));
			$user = $this->User->read(null, $this->user['id']);
			$this->set('user', $user['User']);
			
			
			$newlooks = $this->Look->find('all', array('conditions' => array('Look.user_id' => $this->user['id'])));
			
			$this->set('userLooks',$newlooks);
			
			$wishlist = $this->Wishlist->find('all', array('conditions' => array('Wishlist.user_id' => $this->user['id'])));
			
			$this->set('wishLists',$wishlist);
			
			
			$likeList = $this->Like->find('all', array('conditions' => array('Like.user_id' => $this->user['id'])));
			
			$this->set('likeLists',$likeList);
			
			
			
			
			$flowCount = $this->Follower->find('count', array('conditions' => array('Follower.user_id' => $this->user['id'])));
			
			$this->set('flowCounts',$flowCount);
			
		}
		else
		{
		//		return $this->redirect(array('action' => 'login'));	
		}
			
			
	}
	
	public function my_account()
	{	
		
		if(!empty($this->user['id']))
		{
			$this->set('user', $this->User->read(null,$this->user['id']));
			$user = $this->User->read(null, $this->user['id']);
			$this->set('user', $user['User']);
			
			
			$newlooks = $this->Look->find('all', array('conditions' => array('Look.user_id' => $this->user['id'])));
			$this->set('userLooks',$newlooks);
			
		
			$wishlist = $this->Wishlist->find('all', array('conditions' => array('Wishlist.user_id' => $this->user['id'])));
			$this->set('wishLists',$wishlist);
			
			$likeList = $this->Like->find('all', array('conditions' => array('Like.user_id' => $this->user['id'])));
			$this->set('likeLists',$likeList);
			
			$likeCount = $this->Like->find('count', array('conditions' => array('Like.user_id' => $this->user['id'])));
			$this->set('likeCounts',$likeCount);
			
			$flowCount = $this->Follower->find('count', array('conditions' => array('Follower.user_id' => $this->user['id'])));
			
			$this->set('flowCounts',$flowCount);
			
			
			
			
		}
		
		
		
		
	}
	
	public function portfolio(){
		$orders = $this->Order->find('all', array(
			'conditions' => array('Order.user_id' => $this->user['id']),
			'group' => array('Order.product_id')
		));
		$this->set('orderLists',$orders);
	}
	
	public function view_newlooks($orderid=null)
	{
		if(!empty($this->user['id']))
			{
			$orderlist = $this->Order->find('all', array('conditions' => array('Order.order_id' =>$orderid )));
			$this->set('productImages',$orderlist);
			
			
			$productlists = $this->Look->find('all', array('conditions' => array('Look.order_id' =>$orderid )));
			$this->set('memberImages',$productlists);
			}
			
			
	}
	
	
	
	public function followed_user(){
	  	$this->Paginator->settings = $this->paginate;
		$this->Follower->contain('followed');
		$followed = $this->Paginator->paginate('Follower', array(
			'Follower.user_id' => $this->user['id']
		));
		$this->set('followed',$followed);
	}
	
	public function followers($userId = null){
		if(!empty($userId)){
			$this->User->contain();
			$user = $this->User->find('first', array('conditions' => array('User.id' => $userId)));
			
			$this->Paginator->settings = $this->paginate;
			$this->Follower->contain('followedby');
			$followers = $this->Paginator->paginate('Follower', array(
				'Follower.follow_id' => $userId
			));
			$this->set('followers',$followers);
			$this->set('user', $user['User']);
		}
	}
	
	public function profile($id=null){
		if($id != null){
			$user = $this->User->find('first', array('conditions' => array('User.id' => $id)));
		}
		if($id != null && !empty($user)){
			$this->Follower->contain('User');
			$this->Follower->contain('followedby');
			$followers = $this->Follower->find('all', array('conditions' => array('Follower.follow_id' => $id),'limit' => 10));
			$newlooks = $this->Look->find('all', array('conditions' => array('Look.user_id' => $id),'limit' => 10));
			
			
			$isfollowed = $this->Follower->find('first', array(
				'conditions'=>array('Follower.follow_id'=>$id, 'Follower.user_id'=>  $this->user['id']),
				'fields' => array('Follower.id'),
			));
			$this->set('isfollowed', $isfollowed);
			$this->set('userLooks',$newlooks);
			$this->set('followers',$followers);
			$this->set('user', $user['User']);
		}else{
			throw new NotFoundException(__('Not Found'));
		}
	}
	
	public function follow($uid=null){
		if($uid != null){
			$checkExist = $this->Follower->find('count', array('conditions'=>array('Follower.follow_id'=>$uid, 'Follower.user_id'=>  $this->user['id']),));			
			if(!$checkExist){
				if (!$this->Follower->save(array('follow_id'=>$uid, 'user_id'=>$this->user['id']))){
					$this->Session->setFlash('Oops an unexpected error occurred, Please try again.', 'flash_error');
					$this->redirect($this->referer());
				}
			}
			$this->Session->setFlash('You Liked this Look.', 'flash_success');
			$this->redirect($this->referer());
		}else{
			$this->Session->setFlash('Please select a look to like.', 'flash_error');
			$this->redirect($this->referer());
		}
		
	}
	public function unfollow($fid=null){
		if($fid != null){
			if (!$this->Follower->delete($fid)){
				$this->Session->setFlash('Oops an unexpected error occurred, Please try again.', 'flash_error');
				$this->redirect($this->referer());
			}
			$this->Session->setFlash('You Unfollowed this User.', 'flash_success');
			$this->redirect($this->referer());
		}else{
			$this->Session->setFlash('Please select a User to unfollow.', 'flash_error');
			$this->redirect($this->reffrer());
		}
	}

	
	public function user_profile($id=null)
	{
		$id=$this->Session->read('Auth.User.id');
		if(!empty($id))
		{
		$this->User->id = $id;
        if (empty($this->data))
        {
            $this->data = $this->User->read();
			$userprofile = $this->data = $this->User->read();
			$this->set('userProfile',$userprofile);
			
			$productlists = $this->Look->find('all', array('conditions' => array('Look.user_id' => $id )));
			$this->set('memberImages',$productlists);
			
        }
		$users = $this->User->find('first', array('conditions' => array('User.id' => $id)));
		if ($this->request->is('post') || $this->request->is('put')) {
		
			 if (empty($this->data['User']['image']['name'])) {

                  $image_path = $users['User']['image'];
				
                } else {

                    $image_path = $this->Image->upload_image_and_thumbnail($this->data['User']['image'], "Users");
                }
			
         
                $this->request->data['User']['image'] = $image_path;
				if ($this->User->save($this->data)) 
				{
					$this->Session->setFlash(__('The User Profile has been saved.'));
					return $this->redirect(array('action' => 'index'));	
						   
				}
				else
				{
					 $this->Session->setFlash(__('The User Profile has been not saved, try again'));
				}
		
		}
		
		$newlooks = $this->Look->find('all', array('conditions' => array('Look.user_id' => $this->user['id'])));
		$this->set('userLooks',$newlooks);
		if(!empty($this->user['id']))
		{
			$wishlist = $this->Wishlist->find('all', array('conditions' => array('Wishlist.user_id' => $this->user['id'])));
			
			$this->set('wishLists',$wishlist);
			
			
		
			$likeList = $this->Like->find('all', array('conditions' => array('Like.user_id' => $this->user['id'])));
			
			$this->set('likeLists',$likeList);
			
			
			
		
		
			$likeCount = $this->Like->find('count', array('conditions' => array('Like.user_id' => $this->user['id'])));
			
			$this->set('likeCounts',$likeCount);
			
			
			
			
		}
	
	else
	{
		return $this->redirect(array('action' => 'login'));	
	}
	}
	}
	

	
	public function add_wishlist($objId = null, $type = 0){
		
		if($this->user && $objId){
			$checkExist = $this->Wishlist->find('count', array('conditions'=>array('Wishlist.product_id'=>$objId, 'Wishlist.user_id'=>$this->user['id'])));
			
			
			if(!$checkExist)
			{
				if ($this->Wishlist->save(array('product_id'=>$objId, 'user_id'=>$this->user['id'], 'type'=>$type))){
					$this->Session->setFlash('The Item has added to your Wishlist.', 'flash_success');
				}else{
					$this->Session->setFlash('The Item has could not be added to your Wishlist.', 'flash_error');
				}
			}else{
				$this->Session->setFlash('The Item is already in your Wishlist.', 'flash_error');
			}
			if($type == 1)
			{
				$this->redirect(array('controller'=>'Looks', 'action' => 'detail', $objId));
			}
			else
			{
				$this->redirect(array('controller'=>'Products', 'action' => 'product_details', $objId));
			}
		}else{
			return $this->redirect(array('action' => 'login'));	
		}
	}
	
	
	public function addlooks_wishlists($objId = null, $type = 1){
		
		if($this->user && $objId){
			$checkExist = $this->Wishlist->find('count', array('conditions'=>array('Wishlist.product_id'=>$objId, 'Wishlist.user_id'=>$this->user['id'])));
			if(!$checkExist)
			{
				if ($this->Wishlist->save(array('product_id'=>$objId, 'user_id'=>$this->user['id'], 'type'=>$type))){
					$this->Session->setFlash('The Item has added to your Wishlist.', 'flash_success');
				}else{
					$this->Session->setFlash('The Item has could not be added to your Wishlist.', 'flash_error');
				}
			}else{
				$this->Session->setFlash('The Item is already in your Wishlist.', 'flash_error');
			}
			if($type == 1)
			{
				$this->redirect(array('controller'=>'Looks', 'action' => 'detail', $objId));
			}
			else
			{
				$this->redirect(array('controller'=>'Looks', 'action' => 'detail', $objId));
			}
		}else{
			return $this->redirect(array('action' => 'login'));	
		}
	}
	
	
	public function add_Like($objId = null,$type = 1){
		
		if($this->user && $objId){
		
			
			$checkExist = $this->Like->find('count', array('conditions'=>array('Like.product_id'=>$objId, 'Like.user_id'=>$this->user['id'])));
			
			
			if(!$checkExist)
			{
				if ($this->Like->save(array('product_id'=>$objId, 'user_id'=>$this->user['id']))){
					$this->Session->setFlash('The Item has added to your Likes.', 'flash_success');
				}else{
					$this->Session->setFlash('The Item has could not be added to your Likes.', 'flash_error');
				}
			}else{
				$this->Session->setFlash('The Item is already in your Likes.', 'flash_error');
			}
			if($type == 1)
			{
				$this->redirect(array('controller'=>'Looks', 'action' => 'detail', $objId));
			}
			else
			{
				$this->redirect(array('controller'=>'Looks', 'action' => 'detail', $objId));
			}
		}else{
			return $this->redirect(array('action' => 'login'));	
		}
	}
	
	
	
	public function viewall_wishlist()
	{
	if(!empty($this->user['id']))
		{
		
			$wishlists = $this->Wishlist->find('all', array('conditions' => array('Wishlist.user_id' => $this->user['id'],'Wishlist.type' => '0'  )));
			$this->set('wishLists',$wishlists);
	
			
			$userlooks = $this->Wishlist->find('all', array('conditions' => array('Wishlist.type' => '1'  )));
			
			$userlooks= $this->Look->find('all', array('conditions' => array('Look.product_id' => $userlooks[0]['Wishlist']['product_id'],'Look.user_id' => $this->user['id']  )));
			$this->set('userLooks',$userlooks);
			
			
			
			
			
	}
		
	}
	
	public function commission()
	{
		
	}
	
	
	
	
	

	
	public function purchase()
	{
		
		$orders = $this->Order->find('all', array('group' => array('Order.product_id')));
		$this->set('orders', $orders);
	}
	
	
	
	public function purchase_items()
	{
			
		
			
			$orderid = $this->Order->find('all', array('Order.user_id'=>$this->user['id']));
			$oid=$orderid['Order']['product_id'];
			echo $oid;
			$orders = $this->Order->find('all', array('Order.order_id' => $orderid['Order']['order_id'],'Order.product_id' => $orderid['Order']['product_id'],'Order.user_id'=>$this->user['id']));
		    $this->set('orders', $orders);
			$productlists = $this->Look->find('all', array('conditions' => array('Look.order_id' => $orderid['Order']['order_id'],'Look.product_id' =>$orderid['Order']['product_id'], 'Look.user_id' => $this->user['id'] )));
			$this->set('memberImages',$productlists);
			
	}
	
	
	public function order_details()
	{
		
		
		
		
		
		
			if(!empty($this->user['id']))
			{
				$orderlists = $this->Order->find('all', array('conditions'=>array('Order.user_id'=>$this->user['id'])));
				$this->set('orderList',$orderlists);
				
				//$this->set('order', $this->Order->read(null,$this->user['id']));
			
				//$orderlists = $this->Order->read(null, $this->user['id']);
				//$this->set('orderList', $orderlists);
				//print_r($orderlists);
				//print_r($this->user['id']);
				
				
			}
		
			
			
	}
	 
	
	
	function delete_potfolio($id)
    {
		if(!empty($this->user['id']))
			{
				
				$this->Look->delete($id);
				$this->Session->setFlash('The Portfolio with id: '.$id.' has been deleted.');
				$this->redirect(array('action'=>'portfolio',$id));
				
				
			}
		}
	
	function delete_lookimage($id=null, $orderid=null)
    {
		if(!empty($this->user['id']))
			{
				echo $orderid;
				$this->Look->delete($id);
				$this->Session->setFlash('The Look with id: '.$id.' has been deleted.');
				$this->redirect(array('action'=>'view_newlooks',$orderid));
				
				
			}
		}

	function delete_wishlist($id=null)
    {
		if(!empty($this->user['id']))
			{
				
				$this->Wishlist->delete($id);
				$this->Session->setFlash('The WishList with id: '.$id.' has been deleted.');
				$this->redirect(array('action'=>'viewall_wishlist',$id));

				
				
			}
		}
		
	function delete_wishlistlook($id=null)
    {
		if(!empty($this->user['id']))
			{
				
				
				
				$this->Wishlist->delete(array('Wishlist.id' => '$id'));
				$this->Session->setFlash('The WishList with id: '.$id.' has been deleted.');
				$this->redirect(array('action'=>'viewall_wishlist',$id));
				
			
				

				
				
			}
		}
   
   
   
	
	function edit_lookimage($id)
    {
		$this->Look->id = $id;
        if (empty($this->data))
        {
            $this->data = $this->Look->read();
        }
		$portfolio = $this->Look->find('first', array('conditions' => array('Look.id' => $id)));
        if ($this->request->is('post') || $this->request->is('put')) 
		{
				$userId=$this->request->data['Look']['user_id'];
				$name=$this->request->data['Look']['caption_name'];
				$orderid=$this->request->data['Look']['order_id'];
				$productid=$this->request->data['Look']['product_id'];
			  if (empty($this->data['Look']['image']['name'])) {

                  $image_path = $portfolio['Look']['image'];
				
                } else {

                    $image_path = $this->Image->upload_image_and_thumbnail($this->data['Look']['image'], "Looks");
                }
				
				if ($this->Look->save(array('order_id'=>$orderid,'product_id'=>$productid,'caption_name'=>$name,'image'=>$image_path, 'user_id'=>$this->user['id'])))
				{
				$this->Session->setFlash('The Looks Image has saved .', 'flash_success');
				$this->redirect(array('controller'=>'Users', 'action' => 'view_newlooks',$orderid));
				}
        }
    }
	
	
	
	public function upload_lookimage($orderid=null) {
		$order = $this->Order->find('first', array('conditions'=>array('Order.id'=>$orderid)));
		if(!empty($order)){
			$countLooks = count($order['Look']);
			$this->set('order',$order);
			
			if($countLooks < 3){
				if ($this->request->is('post') || $this->request->is('put')) {
					$userId=$this->request->data['lookupload']['user_id'];
					$name=$this->request->data['lookupload']['caption_name'];
					$orderid=$this->request->data['lookupload']['order_id'];
					$productid=$this->request->data['lookupload']['product_id'];
					
					$image_path = $this->Image->upload_image_and_thumbnail($this->request->data['lookupload']['image'], "Looks");
					if($image_path){
						if ($this->Look->save(array('order_id'=>$orderid,'product_id'=>$productid,'caption_name'=>$name,'image'=>$image_path, 'user_id'=>$this->user['id']))){
							$this->Session->setFlash('The Looks Image has saved .', 'flash_success');
						}else{
							$this->Session->setFlash('Look could not saved .', 'flash_error');
						}
					}
					$this->redirect(array('controller'=>'Users', 'action' => 'portfolio'));
				}
			}else{
				$this->Session->setFlash('Upload limit finished for this product. Upload Look for another product');
				$this->redirect(array('controller'=>'Users', 'action' => 'portfolio'));
			}
		}else{
			throw new NotFoundException(__('Not Found'));
		}
	}
	

    public function login(){
		if($this->Auth->loggedIn()){
			$this->Session->setFlash(__('You are Already logged in'));
			return $this->redirect(array('controller'=>'Users', 'action' => 'index'));
		}
        if ($this->request->is('post')) {
            if ($this->Auth->login()){
                $this->Session->setFlash(__('You are successfully logged in'), 'flash_success');
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout(){
        $this->redirect($this->Auth->logout());
    }


    //public function index() {
    //    $this->User->recursive = 0;
      //  $this->set('users', $this->paginate());
    //}

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function register() {
		if($this->Auth->loggedIn()){
			$this->Session->setFlash(__('You are Already logged in'));
			return $this->redirect(array('controller'=>'Users', 'action' => 'index'));
		}
        if ($this->request->is('post')){
           //$this->User->create();
            if ($this->User->save($this->request->data)){
               
				$id = $this->User->id;
				$newMemId = "ES". sprintf("%06d", $id);
				$this->request->data['User'] = array_merge(
					$this->request->data['User'],
					array('id' => $id)
				);
				
				$this->User->saveField('member_id', $newMemId);
				
				$this->sendNewUserMail($this->request->data['User']['username'], $newMemId);
				 $this->Session->setFlash(__('Please varify your account by clicking on varification link on your mail'), 'flash_success');
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash_error');
            }
			
        }
    }
	
	
	
	

	
	 function sendNewUserMail($email = null, $code = null){
		
		
		//$email=array('sbdh.singh@gmail.com');
		
        if ($email != NULL){

            $this->Email->to =$email;
            $this->Email->subject = 'Welcome to Esmees';
            $this->Email->from = 'Esmees <Subodh@blankandco.com>';
			$this->set('code', $code);
            $this->set('email', $email);
			$this->Email->template = 'new_user';
            $this->Email->sendAs = 'html';
	    
	    if ($this->Email->send()) {
				
                return TRUE;
            } else {
				
                return false;
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
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
	
public function password()
{
	 if($this->request->is('post') || $this->request->is('put')){
            if(!empty($this->request->data['User']['password']) && !empty($this->request->data['User']['password_confirmation'])){
                if($this->request->data['User']['password'] == $this->request->data['User']['password_confirmation']){
                    $this->User->id=$this->Auth->user('id');
                    if($this->User->save($this->request->data)){
                        $this->Session->setFlash('Your password has been changed');
						 $this->redirect(array('controller' => 'Users','action' => 'index'));
                    } else {
                        $this->Session->setFlash('Could not change your password due a server problem, try again latter');
                    }
                } else {
                    $this->Session->setFlash('Your password and your retype must match');
                }
            } else {
                $this->Session->setFlash('Password or retype not sent');
            }
			 
        }
}
}

