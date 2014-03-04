<?php class LooksController extends AppController {
	var $uses = array('Look','Order','User','Product','Category','Like');
	var $helpers = array('Form', 'Country');
	var $components = array('Session','Image');
	var $layout = 'default';
	
    public function beforeFilter(){
		parent::beforeFilter();
    }
	
    public function index(){
		
    }	
	function search_esmees(){
		
	}
	function detail($id=null){
		$looks = $this->Look->find('first', array('conditions' => array('Look.id' => $id )));
		$this->set('looks', $looks);
		$user_id = $looks['User']['id'];
		$product_id = $looks['Product']['id'];
		

		if(!empty($user_id)){
			$userlooks = $this->Look->find('all', array('conditions' => array('Look.user_id' => $user_id )));
			$this->set('memberLooks',$userlooks);
			
			$isLike = $this->Like->find('first', array(
				'conditions'=>array('Like.user_id'=>$this->user['id'], 'Like.product_id'=>  $looks['Look']['id']),
				'fields' => array('Like.id'),
			));
			$this->set('isLiked', $isLike);
		}
		
		if(!empty($product_id)){
			$productlists = $this->Look->find('all', array('conditions' => array('Look.product_id' => $product_id ),'limit'=>3));
			$this->set('memberImages',$productlists);
			
			
		}
	}
	
	
	public function gallery(){
		$parent = $this->Category->find('first', array('conditions' => array(
			'Category.id' => 1
		)));
		$cats = $this->Category->find('threaded', array('conditions' => array(
			'Category.lft >' => $parent['Category']['lft'], 
			'Category.rght <' => $parent['Category']['rght']
		)));
		$this->set('categories', $cats);
		$looks = $this->Look->find('all', array('group'=>'Look.product_id'));		
		$this->set('looks', $looks);
		
		$brand_data = $this->Product->find('all',array('fields'=>'mnf_name','recursive'=>0,'group' => 'Product.mnf_name','conditions' => array('not' => array('Product.mnf_name'))));
		$this->set('AllBrands',$brand_data);
		
		
	}
	
	public function categories($id = null)
	{
		if(!empty($id))
		{
		$this->set('categories', $this->Category->find('all'));
		$brand_data = $this->Product->find('all',array('fields'=>'mnf_name','recursive'=>0,'group' => 'Product.mnf_name','conditions' => array('not' => array('Product.mnf_name'))));
		$this->set('AllBrands',$brand_data);
		$product_category =$this->Product->find('all', array('conditions' => array('Product.parent_id' => $id )));
		$this->set('products', $product_category);
		
		}
	}
	
	public function brands($brands = null)
	{
		if(!empty($brands))
		{
		$this->set('categories', $this->Category->find('all'));
		$brand_data = $this->Product->find('all',array('fields'=>'mnf_name','recursive'=>0,'group' => 'Product.mnf_name','conditions' => array('not' => array('Product.mnf_name'))));
		$this->set('AllBrands',$brand_data);
		$product_category =$this->Product->find('all', array('conditions' => array('Product.mnf_name' => $brands )));
		$this->set('products', $product_category);
		
		}
	}
	
	public function like($objId = null){
		
		if($this->user){		
			if($objId != null){
				$checkExist = $this->Like->find('count', array('conditions'=>array('Like.product_id'=>$objId, 'Like.user_id'=>$this->user['id'])));			
				if(!$checkExist){
					if (!$this->Like->save(array('product_id'=>$objId, 'user_id'=>$this->user['id']))){
						$this->Session->setFlash('Oops an unexpected error occurred, Please try again.', 'flash_error');
						$this->redirect(array('controller'=>'Looks', 'action' => 'detail', $objId));
					}
					$this->User->updateAll(
						array('User.likes' => 'User.likes + 1'),
						array('User.id' => $this->user['id'])
					);
				}
				$this->Session->setFlash('You Liked this Look.', 'flash_success');
				$this->redirect(array('controller'=>'Looks', 'action' => 'detail', $objId));
			}else{
				$this->Session->setFlash('Please select a look to like.', 'flash_error');
				$this->redirect(array('controller'=>'Looks', 'action' => 'gallery'));
			}
		}else{
			return $this->redirect(array('controller'=>'Users', 'action' => 'login'));	
		}
	}
	
	public function ullike($likeId = null){
		if($this->user){
			if($likeId != null){
				if (!$this->Like->delete($likeId)){
					$this->Session->setFlash('Oops an unexpected error occurred, Please try again.', 'flash_error');
					$this->redirect($this->referer());
				}
				$this->User->updateAll(
					array('User.likes' => 'User.likes - 1'),
					array('User.id' => $this->user['id'])
				);
				$this->Session->setFlash('You Unliked this Look.', 'flash_success');
				$this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Please select a look to like.', 'flash_error');
				$this->redirect(array('controller'=>'Looks', 'action' => 'gallery'));
			}
		}else{
			return $this->redirect(array('controller'=>'Users', 'action' => 'login'));	
		}
	}

}