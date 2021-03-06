<?php class UsersController extends AppController {
	var $uses = array('User','Product','Look','Wishlist','Order','Follower','Like','Commission','Widthdraw','Payment');
	var $helpers = array('Form', 'Country');
	public $components = array('Image', 'Email');
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny();
        $this->Auth->allow('add', 'login', 'looks', 'resend', 'register', 'verify', 'followers', 'profile', 'sendNewUserMail','password_recovery','NewPassword','commission');
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
	
	public function index(){
		$this->User->contain();
		$user = $this->User->find('first', array('conditions' => array('User.id'=>$this->user['id'])));
		$this->set('user', $user['User']);
		$newlooks = $this->Look->find('all', array('conditions' => array('Look.user_id' => $this->user['id'], 'Look.cover'=>1),'limit' => 10));	
		$this->set('userLooks',$newlooks);
		
		$wishlists = $this->Wishlist->find('all', array('conditions' => array('Wishlist.user_id' => $this->user['id']),'limit' => 10));
		$this->set('wishLists',$wishlists);
		
		$flowCount = $this->Follower->find('count', array('conditions' => array('Follower.follow_id' => $this->user['id'])));		
		$this->set('flowCounts',$flowCount);
		
		
		$total_vested = $this->Commission->find('first', array('conditions' => array(
			'Commission.user_id' => $this->user['id'],
			'Commission.vesting_date <=' => date('Y-m-d')
		),'fields' => array('sum(Commission.user_commission) as total_vested')));
		$this->set('vestedCommission',$total_vested);
		
		
	}
	public function portfolio(){
		$orders = $this->Order->find('all', array(
			'conditions' => array('Order.user_id' => $this->user['id']),
			'group' => array('Order.product_id')
		));
		$this->set('orderLists',$orders);
	}	
	
	public function followed_user(){
		$this->Follower->contain('followed');
		$this->paginate = array('conditions' => array(
			'Follower.user_id' => $this->user['id']
		), 'limit'=>20); 			
		$followed = $this->paginate('Follower');
		$this->set('followed',$followed);
	}
	
	public function followers($userId = null){
		if(!empty($userId)){
			$this->User->contain();
			$user = $this->User->find('first', array('conditions' => array('User.id' => $userId)));
			
			$this->Follower->contain('followedby');
			$this->paginate = array('conditions' => array(
				'Follower.follow_id' => $userId
			), 'limit'=>20); 			
			$followers = $this->paginate('Follower');
			$this->set('followers',$followers);
			$this->set('user', $user['User']);
		}
	}
	
	public function looks($userId = null){
		if(!empty($userId)){
			$this->User->contain();
			$user = $this->User->find('first', array('conditions' => array('User.id' => $userId)));
			
			$this->paginate = array('conditions' => array(
				'Look.user_id' => $userId, 'Look.cover'=>1,
			), 'limit'=>20); 			
			$looks = $this->paginate('Look');
			$this->set('looks',$looks);
			$this->set('user', $user['User']);
		}
	}
	
	public function wishlist(){
		$this->paginate = array('conditions' => array(
			'Wishlist.user_id' => $this->user['id']
		), 'limit'=>20); 			
		$wishlists = $this->paginate('Wishlist');
		$this->set('wishLists',$wishlists);
	}
	
	public function profile($id=null){
		if($id != null){
			$user = $this->User->find('first', array('conditions' => array('User.id' => $id)));
		}
		if($id != null && !empty($user)){
			$this->Follower->contain('followedby');
			$followers = $this->Follower->find('all', array('conditions' => array('Follower.follow_id' => $id),'limit' => 10));
			$newlooks = $this->Look->find('all', array('conditions' => array('Look.user_id' => $id, 'Look.cover'=>1),'limit' => 10));
			
			
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
			$this->Session->setFlash('You followed this User.', 'flash_success');
			$this->redirect($this->referer());
		}else{
			$this->Session->setFlash('Please select a User to follow.', 'flash_error');
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
			$this->redirect($this->referer());
		}
	}
	
	function convertDates( &$data ){
    if (!empty($data['date_of_birth']) && strtotime($data['date_of_birth']) ){
        $data['date_of_birth'] = date('Y-m-d', strtotime($data['date_of_birth']));
    }
}

	
	public function edit_profile(){
		$id = $this->user['id'];
		
		$users = $this->User->find('first', array(
					'conditions' => array(
						'User.id'=> $id
					)
				)
			);
		if ($this->request->is('post') || $this->request->is('put')) {
			 if (empty($this->data['User']['image']['name'])) {

                  $image_path = $users['User']['image'];
				
                } else {

                    $image_path = $this->Image->upload_image_and_thumbnail($this->data['User']['image'], "Users");
                }
			
         
                $this->request->data['User']['image'] = $image_path;
                $this->request->data['User']['id'] = $users['User']['id'];
				$this->convertDates( $this->request->data['User'] );
				if ($this->User->save($this->request->data)) 
				{
					
					$this->Session->setFlash(__('The User Profile has been saved.'));
					return $this->redirect(array('action' => 'index'));	
						   
				}
				else
				{
					 $this->Session->setFlash(__('The User Profile has been not saved, try again'));
				}
		
		}
		$this->data = $users;
		$this->set('userProfile',$users['User']);
	}
	

	
	public function add_wishlist($objId = null, $type = 0){
		
		
		
		if($objId){
			$checkExist = $this->Wishlist->find('count', array('conditions'=>array('Wishlist.product_id'=>$objId, 'Wishlist.user_id'=>  $this->user['id']),));
			if(!$checkExist){
			if ($this->Wishlist->save(array('product_id'=>$objId, 'user_id'=>$this->user['id'], 'type'=>$type))){
				$this->Session->setFlash('The Item has added to your Wishlist.', 'flash_success');
			}else{
				
			}
			}
			else
			{
				$this->Session->setFlash('The Item has all ready added to your Wishlist.', 'flash_error');
			}
		}
		$this->redirect($this->referer());
	}
	public function delete_wishlist($id=null){
		if($id != null){
			$this->Wishlist->delete($id);
			$this->Session->setFlash('The WishList item has been deleted.');
			$this->redirect($this->referer());
		}
	}
	
	
	
	public function delete_potfolio($id){
		$this->Look->delete($id);
		$this->Session->setFlash('The Portfolio with id: '.$id.' has been deleted.');
		$this->redirect($this->referer());
	}
	
	public function delete_lookimage($id=null, $orderid=null){
		$this->Look->delete($id);
		$this->Session->setFlash('The Look with id: '.$id.' has been deleted.');
		$this->redirect(array('action'=>'view_newlooks',$orderid));
		 
	}

	
	public function edit_lookimage($id)
    {
	
		$this->Look->id = $id;
        if (empty($this->data))
        {
            $this->data = $this->Look->read();
        }
		$this->Look->contain();
		$portfolio = $this->Look->find('first', array('conditions' => array('Look.id' => $id)));
		
        if ($this->request->is('post') || $this->request->is('put')) 
		{
			
			$name= $this->request->data['Look']['caption_name'];
			$cover= $this->request->data['Look']['cover'];
			
				
			  if (empty($this->data['Look']['image']['name'])) {

                  $image_path = $portfolio['Look']['image'];
				
                } else {

                    $image_path = $this->Image->upload_image_and_thumbnail($this->data['Look']['image'], "Looks");
                }
				
				 $this->Look->contain();
				$checkCover = $this->Look->find('first', array('conditions' => array(
							'Look.cover'=>1,
							'Look.order_id'=>$portfolio['Look']['order_id']
						), 'fields'=>'Look.id'));						
				
				if ($this->Look->save(array('caption_name'=>$name,'image'=>$image_path, 'cover'=>$cover, 'id'=>$id)))
				{
					$this->Session->setFlash('The Looks Image has saved .', 'flash_success');
				}
				if($cover > 0 && !empty($checkCover)){
					$this->Look->id = $checkCover['Look']['id'];
					$this->Look->saveField('cover', 0);
				}
					$this->redirect(array('controller'=>'Users', 'action' => 'portfolio'));
        }
		
		$this->data = $portfolio;
		$this->set('userLook',$portfolio['Look']);
		
    }
	
	
	
	public function upload_lookimage($proId=null, $uid=null) {
		intval($proId);
		intval($uid);
		if($uid && $proId){
			$this->Order->contain();
			$order = $this->Order->find('first', array('conditions'=>array(
				'Order.product_id'=>$proId,
				'Order.user_id'=>$uid,
			)));
		
			$countLooks = $this->Look->find('count', array('conditions'=>array(
				'Look.user_id'=>$uid,
				'Look.product_id'=>$proId
			)));
			$this->set('order',$order);
			
			
			if($countLooks < 3){
				if ($this->request->is('post') || $this->request->is('put')) {
					
					
					
					$product = $this->Product->find('first', array('conditions'=>array('Product.id'=>$proId)));
					
					
					$image_path = $this->Image->upload_image_and_thumbnail($this->request->data['lookupload']['image'], "Looks");
					if($image_path){
						$this->request->data['lookupload']['category_id'] = $product['Product']['parent_id'];
						$this->request->data['lookupload']['brand'] = $product['Product']['mnf_name'];
						$this->request->data['lookupload']['image'] = $image_path;
						$this->Look->contain();
						$checkCover = $this->Look->find('first', array('conditions' => array(
							'Look.cover'=>1,
							'Look.order_id'=>$this->request->data['lookupload']['order_id']
						), 'fields'=>'Look.id'));						
						if(!$checkCover){
							$this->request->data['lookupload']['cover'] = 1;
						}
						if ($this->Look->save($this->request->data['lookupload'])){
						
							$this->Session->setFlash('The Looks Image has saved .', 'flash_success');
						}else{
							$this->Session->setFlash('Look could not saved .', 'flash_error');
						}
						if($checkCover){
							if($this->request->data['lookupload']['cover'] > 0){
								$this->Look->id = $checkCover['Look']['id'];
								$this->Look->saveField('cover', 0);
								
							}
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
			$user = $this->User->findByUsername($this->request->data['User']['username']);
			if (!empty($user)) {
				if ($user['User']['status'] == 0){
					$this->Session->setFlash(__('Your email id is not verified, please verify your email id.<br/>Not verification email yet? <a href="http://www.esmees.blankandco.com/users/resend">click here</a> to send verification email again.'), 'flash_error');
					
					$this->redirect($this->referer());
				}
			}

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

    public function register(){
		if($this->Auth->loggedIn()){
			$this->Session->setFlash(__('You are Already logged in'));
			$this->redirect(array('controller'=>'Users', 'action' => 'index'));
		}
        if ($this->request->is('post')){
			$hash=sha1($this->request->data['User']['username'].rand(0,100));
			$this->request->data['User']['token']=$hash;
            if ($this->User->save($this->request->data)){
				$id = $this->User->id;
				$newMemId = "ES". sprintf("%06d", $id);
				$this->request->data['User'] = array_merge(
					$this->request->data['User'],
					array('id' => $id)
				);
				$this->User->saveField('member_id', $newMemId);
				$email = $this->sendNewUserMail($this->request->data['User']);
				$this->Session->setFlash(__('Please verify your email by clicking on verification link'));
				$this->redirect(array('controller'=>'Pages','action' =>'index'));
            }else{
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash_error');
            }
        }
    }
	public function sendNewUserMail($data = array()){
        if ($data != NULL){
            $this->Email->to =$data['username'];
            $this->Email->subject = 'Welcome to Esmees.com';
            $this->Email->from = 'Esmees <Subodh@blankandco.com>';
			$this->set('data', $data);
			$this->Email->template = 'new_user';
            $this->Email->sendAs = 'html';
			if ($this->Email->send()) {
				return true;
			} else {				
				return false;	
			}
		}
	}
	

	public function resendNewUserMail($user = array()){
        if ($user != NULL){
            $this->Email->to =$user['username'];
            $this->Email->subject = 'Welcome to Esmees.com';
            $this->Email->from = 'Esmees <Subodh@blankandco.com>';
			$this->set('user', $user);
			$this->Email->template = 'resend_user';
            $this->Email->sendAs = 'html';
			if ($this->Email->send()) {
				return true;
			} else {				
				return false;	
			}
		}
	}
	

	public function resend(){
		if ($this->request->is('post')){
			$username=$this->request->data['User']['username'];
			$user = $this->User->find('first', array('conditions'=>array('User.username'=>$username)));
			if(!empty($user)){
				$token=$user['User']['token'];	
				$this->request->data['User']['name'] = $user['User']['name'];
				$this->request->data['User']['username'] = $user['User']['username'];
				$this->request->data['User']['token'] = $user['User']['token'];
				$this->request->data['User']['password'] = $user['User']['password'];
				
				
				
				if ($user['User']['status']==0){
				
					$email = $this->sendNewUserMail(array_merge($this->request->data['User'],array('username' => $username)));
					$this->Session->setFlash(__('Your verification code has been generated and Emailed to ' . $username.''), 'flash_success');
					$this->redirect(array('controller'=>'Pages','action' =>'index'));
				
				}
				if ($user['User']['status']==1)
				{			
						$this->Session->setFlash('Your account is already verified, Please login');
						$this->redirect(array('controller'=>'Pages', 'action'=>'index'));
				
				}
			}else{
				$this->Session->setFlash('Sorry! we could not find your email. Please register.');
				$this->redirect(array('controller'=>'Users', 'action'=>'register'));
			}
		}
		
	}

	
	public function verify(){
		if (!empty($this->passedArgs['t']) && !empty($this->passedArgs['u'])){
			$name = $this->passedArgs['u'];
			$token = $this->passedArgs['t'];
			$results = $this->User->findByUsername($name);
			if ($results['User']['status']==0){
				if($results['User']['token']==$token){					
					$hash= sha1($results['User']['username'].rand(0,100));
					
					$this->User->updateAll(
						array(
							'User.status' => 1,
							'User.token' => "'".$hash."'"
						),
						array(
							'User.id' => $results['User']['id']
						)
					);
					$this->Session->setFlash('Your registration is complete');
					$this->redirect(array('controller'=>'Users', 'action'=>'login'));
				}else{
					$this->Session->setFlash('Verification code expired, please fill your email below and resend verification code');
					$this->redirect(array('controller'=>'Users', 'action'=>'resend'));
				}
			}else{
				$this->Session->setFlash('Your account is already verified, Please login');
					$this->redirect(array('controller'=>'Users', 'action'=>'login'));
			}
		}else{
			throw new NotFoundException(__('Invalid user'));
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
        $this->redirect(array('action' => '
		'));
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

	public function generate_commissionls()
	{
			
		 $linkshare = $this->Link->find('all');
		 pr($linkshare);
			
			
			
	}

	public function commission()
	{
	
	 $userid = $this->user['id'];
	 if(!empty($userid))
	 {
		$total_commision = $this->Commission->find('first', array('conditions' => array('Commission.user_id' => $userid),'fields' => array('sum(Commission.user_commission) as total' )));
		$this->set('totalCommission',$total_commision);
		
		
		$total_vested = $this->Commission->find('first', array('conditions' => array(
			'Commission.user_id' => $userid,
			'Commission.vesting_date <=' => date('Y-m-d')
		),'fields' => array('sum(Commission.user_commission) as total_vested')));
		$this->set('vestedCommission',$total_vested);
		
		
		$paid_commission = $this->Payment->find('first', array('conditions' => array('Payment.user_id' => $userid),'fields' => array('sum(Payment.amount) as total_paid' )));
		$this->set('paidCommission',$paid_commission);
		
		
		
		
		
		
		$user = $this->User->find('first', array('conditions' => array('User.id'=>$this->user['id'])));
		
		
		
		if ($this->request->is('post'))
		 {
		
		
				
		$ss_number=$user['User']['ss_number'];
		$bankaccount_no=$user['User']['bankaccount_no'];
		$bankrouting_no=$user['User']['bankrouting_no'];
		$bankname=$user['User']['bankname'];
		$address=$user['User']['address'];
		//if(empty($ss_number) && empty($bankaccount_no) && empty($bankrouting_no) &&  empty($bankname))
		 //{
		//	$this->Session->setFlash('Banking Details can not blank!');
		//	$this->redirect(array('controller' => 'Users','action' => 'bank_details'));
		 //}
		 
		 if(empty($address))
		 {
			$this->Session->setFlash('Please enter your address details');
			$this->redirect(array('controller' => 'Users','action' => 'bank_details'));
		}
		
		 else
		 {
			$amount= $this->request->data['fetch_request']['amount'];
			$vamount= round($this->request->data['fetch_request']['vamount'], 2);
			
			if($amount < 0 || $amount > $vamount)
			{
				$this->Session->setFlash('The Widthdraw Request should  be Less  then or Equal to Available Vested Amount, and not a negative value', 'flash_success');
			}
			
			
		 else
		 {
			$date =date('Y-m-d');
	if ($this->Widthdraw->save(array('widthdraw_request_amount'=>$amount,'request_date'=>$date, 'user_id'=>$this->user['id'])))
				{
					$this->Session->setFlash('The Widthdraw Request  has sent .', 'flash_success');
					 $this->redirect(array('controller' => 'Users','action' => 'index'));
					
				}
				else
				{
				 $this->Session->setFlash(__('The Widthdraw Request could not be sent. Please, try again.'));
				}
		 }
		 }
		
		
		}
	
	}
	}
	
	public function withdraw($id=null)
	{
		$comm = $this->Commission->find('first', array('conditions' => array('Commission.user_id'=>$this->user['id'])));
		$this->set('commissionList',$comm);
		if ($this->request->is('post')) {
		$ss_number=$comm['User']['ss_number'];
		$bankaccount_no=$comm['User']['bankaccount_no'];
		$bankrouting_no=$comm['User']['bankrouting_no'];
		$bankname=$comm['User']['bankname'];
		$totalC = $comm['Commission']['total_commission_earned'];
		$totalV = $comm['Commission']['total_Amount_vested'];
		if(!empty($ss_number) && !empty($bankaccount_no) && !empty($bankrouting_no) &&  !empty($bankname))
		 {
			
			
			$amount= $this->request->data['fetch_request']['amount'];
			$amountV= $this->request->data['fetch_request']['totalV'];
			$currency=$this->request->data['fetch_request']['currency'];
			
			
			if($totalV < $amountV)
			{
				$this->Session->setFlash('Please enter request amount less them vested amount');
				
			}
			else
			{
				if ($this->Widthdraw->save(array('widthdraw_request_amount'=>$amount, 'currency'=>$currency ,'user_id'=>$this->user['id'])))
				{
					$this->Session->setFlash('The Widthdraw Request  has sent .', 'flash_success');
					 $this->redirect(array('controller' => 'Users','action' => 'index'));
					
				}
				else
				{
				 $this->Session->setFlash(__('The Widthdraw Request could not be sent. Please, try again.'));
				}
			}
		}
		
		else 
		{
						$this->Session->setFlash('Paypal Info can not blank! Pls Update Your Paypal info');
						 $this->redirect(array('controller' => 'Users','action' => 'edit_profile'));
		}
		 
		 
	}
	}
	
	 public function password_recovery() {

        if ($this->request->is('post')) {

            $email = $this->data['User']['username'];
            $info = $this->User->find('first', array('conditions' => array('User.username' => $email),
                'recursive' => -1));
			$status=$info['User']['status'];
			
            
	    if ($status==1) 
		{
		
                $data['User']['id'] = $info['User']['id'];
                $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#&!1234567890';
                $data['User']['password'] = substr(str_shuffle($charset), 0, 10);
				

               
                if ($this->User->save($data)) {
					
                    if ($this->NewPassword($email, $data['User']['password']) == TRUE) {

						$this->Session->setFlash(__('Your new password has been generated and Emailed to ' . $email.''), 'flash_success');
						
                       
                    } else {
						$this->Session->setFlash(__('There was an problem in sending you the recovery password, kindly try-again.'), 'flash_error');
                   
                       
                       // $this->redirect(array('action'=>'PasswordRecovery'));
                    }
                } else {
				    $this->Session->setFlash(__('There was an error in saving your new password, kindly try-again.'), 'flash_error');
                   
                   
                }
            } else {
			
				$this->Session->setFlash(__('Your email id is not verified, please verify your email id.<br/>Not verification email yet? <a href="http://www.esmees.blankandco.com/users/resend">click here</a> to send verification email again.'), 'flash_error');
					
					$this->redirect($this->referer());
              
				// $this->Session->setFlash(__('This email address is not registered with us.'), 'flash_error');
            }
        }
		else
		{
			
					
				
		}
    }

    function NewPassword($email = NULL, $code = NULL) {

        if ($email != NULL && $code != NULL) {

            $this->Email->to = $email;

            $this->Email->subject = 'Esmees.com | Password Recovery';

            $this->Email->from = 'Esmees <Subodh@blankandco.com>';
            $this->set('code', $code);
            $this->Email->template = 'new_password';
            $this->Email->sendAs = 'both';

            if ($this->Email->send()) {
                return TRUE;
            } else {
                return false;
            }
        }
    }
	
	public function bank_details()
	{
		$this->User->contain();
		$userinfo = $this->User->find('first', array('conditions'=>array('User.id'=>$this->user['id'])));
		$this->set('userInfo',$userinfo);
		
		
		if ($this->request->is('post'))
		 {
			$userid = $this->user['id'];
			$nickname= $this->request->data['bank']['nickname'];
			$fname= $this->request->data['bank']['name'];
			$mname=$this->request->data['bank']['middle_name'];
			$lname=$this->request->data['bank']['last_name'];
			$email=$this->request->data['bank']['username'];
			$address=$this->request->data['bank']['address'];
			$address1=$this->request->data['bank']['address1'];
			$city=$this->request->data['bank']['city'];
			$state=$this->request->data['bank']['state'];
			$zip=$this->request->data['bank']['zip'];
			
			//$bankname= $this->request->data['bank']['bankname'];
			//$acnumber= $this->request->data['bank']['acnumber'];
			//$ssnumber=$this->request->data['bank']['ssnumber'];
			//$brtnumber=$this->request->data['bank']['br_number'];
			
			
			if ($this->User->save(array('nickname'=>$nickname,'name'=>$fname,'middle_name'=>$mname,'last_name'=>$lname,'username'=>$email,'address'=>$address,'address1'=>$address1,'city'=>$city,'state'=>$state,'zip'=>$zip,'id'=>$userid)))
				{
					$this->Session->setFlash('Address details saved .', 'flash_success');
					 $this->redirect(array('controller' => 'Users','action' => 'commission'));
					
				}
				else
				{
				 $this->Session->setFlash(__('The Address could not be saved. Please, try again.'));
				}
			
			
			
		
		 }
		
		
	}
	
public function update_bank_details()
	{
		$this->User->contain();
		$userinfo = $this->User->find('first', array('conditions'=>array('User.id'=>$this->user['id'])));
		$this->set('userInfo',$userinfo);
		
		
		if ($this->request->is('post'))
		 {
			$userid = $this->user['id'];
			$nickname= $this->request->data['bank']['nickname'];
			$fname= $this->request->data['bank']['name'];
			$mname=$this->request->data['bank']['middle_name'];
			$lname=$this->request->data['bank']['last_name'];
			$email=$this->request->data['bank']['username'];
			$address=$this->request->data['bank']['address'];
			$address1=$this->request->data['bank']['address1'];
			$city=$this->request->data['bank']['city'];
			$state=$this->request->data['bank']['state'];
			$zip=$this->request->data['bank']['zip'];
			
			//$bankname= $this->request->data['bank']['bankname'];
			//$acnumber= $this->request->data['bank']['bankaccount_no'];
			//$ssnumber=$this->request->data['bank']['ss_number'];
			//$brtnumber=$this->request->data['bank']['bankrouting_no'];
			
			
			if ($this->User->save(array('nickname'=>$nickname,'name'=>$fname,'middle_name'=>$mname,'last_name'=>$lname,'username'=>$email,'address'=>$address,'address1'=>$address1,'city'=>$city,'state'=>$state,'zip'=>$zip,'id'=>$userid)))
				{
					$this->Session->setFlash('Address details saved .', 'flash_success');
					 $this->redirect(array('controller' => 'Users','action' => 'commission'));
					
				}
				else
				{
				 $this->Session->setFlash(__('The Address could not be saved. Please, try again.'));
				}
			
			
			
		
		 }
		
		
	}
	
	

	public function download_reports()
	{
		echo "---------------";
	}
	    
	
	
}

