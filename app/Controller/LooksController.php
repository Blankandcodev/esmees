<?php class LooksController extends AppController {
	var $uses = array('Look','Order','User','Product','Category','Like');
	var $helpers = array('Form', 'Country');
	var $components = array('Session','Image');
	var $layout = 'default';
	
    public function beforeFilter(){
		parent::beforeFilter();
    }
	
    public function index(){
		$this->redirect(array('action'=>'gallery', 'all'));
    }
	function detail($id=null){
		$id = intval($id);
		$this->Look->contain('User', 'Product');
		$looks = $this->Look->find('first', array('conditions' => array('Look.Id' => $id )));
		if(!empty($looks)){
			$this->set('looks', $looks);
			$user_id = $looks['User']['id'];
			$product_id = $looks['Product']['id'];

			if(!empty($user_id)){
				$userlooks = $this->Look->find('all', array('conditions' => array('Look.user_id' => $user_id ), 'limit'=>10));
				$this->set('memberLooks',$userlooks);
				
				$isLike = $this->Like->find('first', array(
					'conditions'=>array('Like.user_id'=>$this->user['id'], 'Like.product_id'=>  $looks['Look']['Id']),
					'fields' => array('Like.id'),
				));
				$this->set('isLiked', $isLike);
			}
			
			if(!empty($product_id)){
				$productlists = $this->Look->find('all', array('conditions' => array('Look.product_id' => $product_id ),'limit'=>3));
				$this->set('memberImages',$productlists);
				
				
			}
		}else{
			throw new NotFoundException(__('Not Found'));
		}
	}
	
	
	public function gallery($cat = null){
		if($cat == null){
			$this->redirect(array('action'=>'gallery', 'all'));
		}
		$parent = $this->Category->find('first', array('conditions' => array(
			'Category.name' => $cat
		)));
		if(!empty($parent)){
			$cats = $this->Category->find('threaded', array('conditions' => array(
				'Category.lft >' => $parent['Category']['lft'], 
				'Category.rght <' => $parent['Category']['rght']
			)));
			$this->set('categories', $cats);
						
			$cond0 = array();
			$cond = array();
			
			if(isset($this->request->query['brand']) && $this->request->query['brand'] != ''){
				$brand = $this->request->query['brand'];
				array_push($cond0, "Look.brand = '$brand'");
			};
			if(isset($this->request->query['keyword']) && $this->request->query['keyword'] != ''){
				$keyword = '%'.$this->request->query['keyword'].'%';
				array_push($cond, "Look.caption_name LIKE '$keyword'"); 
				array_push($cond, "User.username LIKE '$keyword'");
			};
			if(isset($this->request->query['cat']) && $this->request->query['cat'] != ''){
				$cat = $this->request->query['cat'];
				$id = intval($cat);
			}else{
				$id = intval($parent['Category']['id']);
			};
			if(isset($id) && is_int($id)){
				$subCats = $this->Category->children($id, false, 'Category.id');
				array_push($cond, "Look.category_id = $id");
				foreach($subCats as $scat){
					$sid = $scat ['Category']['id'];
					array_push($cond, "Look.category_id = $sid");
				}
				
			}
				
			$this->Look->contain('User', 'Like');
			$this->paginate = array('conditions' => array(
				'AND'=>$cond0,
				'OR'=>$cond
			), 'limit'=>20); 			
			$looks = $this->paginate('Look');

			$this->set('looks', $looks);
			
			$brand_data = $this->Product->find('all',array('fields'=>'mnf_name','recursive'=>0,'group' => 'Product.mnf_name','conditions' => array('not' => array('Product.mnf_name'))));
			$this->set('AllBrands',$brand_data);
		}else{
			throw new NotFoundException(__('Not Found'));
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
					$this->Look->updateAll(
						array('Look.likes' => 'Look.likes + 1'),
						array('Look.Id' => $objId)
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
				$like = $this->Like->find('first', array('conditions'=>array('Like.id'=>$likeId)));
				if(!empty($like)){
					if (!$this->Like->delete($likeId)){
						$this->Session->setFlash('Oops an unexpected error occurred, Please try again.', 'flash_error');
						$this->redirect($this->referer());
					}
					$this->User->updateAll(
						array('User.likes' => 'User.likes - 1'),
						array('User.id' => $this->user['id'])
					);
					$this->Look->updateAll(
						array('Look.likes' => 'Look.likes - 1'),
						array('Look.Id' => $like['Like']['product_id'])
					);
					$this->Session->setFlash('You Unliked this Look.', 'flash_success');
					$this->redirect($this->referer());
				}
			}else{
				$this->Session->setFlash('Please select a look to like.', 'flash_error');
				$this->redirect(array('controller'=>'Looks', 'action' => 'gallery'));
			}
		}else{
			return $this->redirect(array('controller'=>'Users', 'action' => 'login'));	
		}
	}

}