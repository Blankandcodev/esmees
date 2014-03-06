<?php class ProductsController extends AppController {
	var $uses = array('Product','Order','Look','User','Category','Like');
	var $helpers = array('Form', 'Country');
	var $components = array('Session');
	var $layout = 'default';
	
	public function beforeFilter(){
        parent::beforeFilter();
	}
	
    public function index(){
		$this->redirect(array('action'=>'gallery', 'all'));
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
				array_push($cond0, "Product.mnf_name = '$brand'");
			};
			if(isset($this->request->query['keyword']) && $this->request->query['keyword'] != ''){
				$keyword = '%'.$this->request->query['keyword'].'%';
				array_push($cond, "Product.name LIKE '$keyword'");
			};
			if(isset($this->request->query['cat']) && $this->request->query['cat'] != ''){
				$cat = $this->request->query['cat'];
				$id = intval($cat);
			}else{
				$id = intval($parent['Category']['id']);
			};
			if(isset($id) && is_int($id)){
				$subCats = $this->Category->children($id, false, 'Category.id');
				array_push($cond, "Product.parent_id = $id");
				foreach($subCats as $scat){
					$sid = $scat ['Category']['id'];
					array_push($cond, "Product.parent_id = $sid");
				}
				
			}
				
			$this->Product->contain();
			$this->paginate = array('conditions' => array(
				'AND'=>$cond0,
				'OR'=>$cond
			), 'limit'=>20);			
			$products = $this->paginate('Product');
			$this->set('products', $products);
			
			$brand_data = $this->Product->find('all',array('fields'=>'mnf_name','recursive'=>0,'group' => 'Product.mnf_name','conditions' => array('not' => array('Product.mnf_name'))));
			$this->set('AllBrands',$brand_data);
		}else{
			throw new NotFoundException(__('Not Found'));
		}
	}
	
	
	public function wishlist()
	{
		
		$id=$this->Session->read('Auth.User.id');
		if(!empty($id))
		{
			
			if ($this->request->is('post') || $this->request->is('put')) {
			
				$params = $this->request->data['wish'];
				print_r($params);
				//if ($this->Look->save($this->data)) 
				//{
				//	$this->Session->setFlash(__('The Product has been saved.'));
				//	return $this->redirect(array('action' => 'product_order'));			   
			//	}
		
		}
			$this->Session->setFlash(__('The WishList has been saved.'));
			///return $this->redirect(array('action' => 'wishlist'));	
		}
		else
		{
			return $this->redirect(array('controller'=>'Users','action' => 'login'));	
		}
		
	}

	
   
	
	public function men(){
		$cat = $this->Category->find('first', array('conditions' => array(
			'Category.name' => 'men'
		)));
		$cond = array();
		$cond0 = array();
		if(!empty($cat)){
			$cid = $cat['Category']['id'];
			if($cid){
				$subCats = $this->Category->children($cid, false, 'Category.id');
				array_push($cond, "Product.parent_id = $cid");
				array_push($cond0, "Look.category_id = $cid");
				foreach($subCats as $scat){
					$sid = $scat ['Category']['id'];
					array_push($cond, "Product.parent_id = $sid");
					array_push($cond0, "Look.category_id = $sid");
				}				
			}
				
			$this->Product->contain();
			$this->Look->contain('User', 'Like');
			
			$products=$this->Product->find('all', array('conditions' => array('OR'=>$cond), 'order' => array('Product.created' => 'DESC'),'limit' => 10));
		
			$looks = $this->Look->find('all', array('conditions' => array('OR'=>$cond0), 'lomit'=>10));
			
			$this->set('products', $products);
			$this->set('looks', $looks);
		}
    }
	public function women(){
		$cat = $this->Category->find('first', array('conditions' => array(
			'Category.name' => 'women'
		)));
		$cond = array();
		$cond0 = array();
		if(!empty($cat)){
			$cid = $cat['Category']['id'];
			if($cid){
				$subCats = $this->Category->children($cid, false, 'Category.id');
				array_push($cond, "Product.parent_id = $cid");
				array_push($cond0, "Look.category_id = $cid");
				foreach($subCats as $scat){
					$sid = $scat ['Category']['id'];
					array_push($cond, "Product.parent_id = $sid");
					array_push($cond0, "Look.category_id = $sid");
				}				
			}
				
			$this->Product->contain();
			$this->Look->contain('User', 'Like');
			
			$products=$this->Product->find('all', array('conditions' => array('OR'=>$cond), 'order' => array('Product.created' => 'DESC'),'limit' => 10));
		
			$looks = $this->Look->find('all', array('conditions' => array('OR'=>$cond0), 'lomit'=>10));
			
			$this->set('products', $products);
			$this->set('looks', $looks);
		}
    }
	public function product_details($id=null)
	{
		
		$id = intval($id);
		$this->Product->contain();
		$details=$this->Product->find('first', array('conditions' => array('Product.id' => $id )));
		if(!empty($details)){
			$this->set('products', $details);
			$brand = $details['Product']['mnf_name'];
			$product_id = $details['Product']['id'];
			if(!empty($product_id)){
				$similarLooks = $this->Look->find('all', array('conditions' => array('Look.product_id' => $product_id ), 'limit'=>10));
				$this->set('similarLooks',$similarLooks);
			}
			if(!empty($brand)){
				$brandLooks = $this->Look->find('all', array('conditions' => array('Look.brand' => $brand ), 'limit'=>10));
				$this->set('brandLooks',$brandLooks);
			}
		}else{
			throw new NotFoundException(__('Not Found'));
		}		
    }
	
	public function men_gallery($id=null ,$bname=null)
	{
		$allChildren = $this->Category->children(5
		);
		$this->set('categories',$allChildren); 
		$brand_data = $this->Product->find('all',array('fields'=>'mnf_name','recursive'=>0,'group' => 'Product.mnf_name','conditions' => array('not' => array('Product.mnf_name'))));
		$this->set('AllBrands',$brand_data);
		
		if (!empty($this->request->query['keyword'])) { 
		$this->paginate = array('conditions' => array('Product.parent_id'=>2,
		'OR'=>array( 
                'Product.name LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.descrition LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.price LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.advetiser_name LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.mnf_name LIKE' => '%'.$this->request->query['keyword'].'%', 
			    'Product.sku LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Look.caption_name LIKE' => '%'.$this->request->query['keyword'].'%', 
				'User.username LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Category.name LIKE' => '%'.$this->request->query['keyword'].'%',
               ))); 
			   $results = $this->paginate('Product'); 
			   $this->set('allProducts', $results); 
		}
		
		else if (!empty($id) &&  is_int($id))
		{
			$subCats = $this->Category->children($id, false, 'Category.id');
			$cond = array();
			array_push($cond, "Product.Parent_id = $id");
			foreach($subCats as $scat){
				$sid = $scat ['Category']['id'];
				array_push($cond, "Product.Parent_id = $sid");
			}
			$this->paginate = array('conditions' => array( 'OR'=>$cond)); 
			 $results = $this->paginate('Product'); 
			 $this->set('allProducts', $results); 
		} 
		
		else
		{
			$this->paginate = array('conditions' => array('Product.advetiser_name'=>$id)); 
			 $results = $this->paginate('Product'); 
			 $this->set('allProducts', $results); 
			// $results = $this->paginate('Product'); 
			 // $this->set('allProducts', $results); 
		}
		
		
		
	}
	
	
	public function women_gallery($id=null ,$bname=null)
	{
		$allChildren = $this->Category->children(3);
		$this->set('categories',$allChildren); 
		
		$brand_data = $this->Product->find('all',array('fields'=>'mnf_name','recursive'=>0,'group' => 'Product.mnf_name','conditions' => array('not' => array('Product.mnf_name'))));
		$this->set('AllBrands',$brand_data);
		
		if (!empty($this->request->query['keyword'])) { 
	
		$this->paginate = array('conditions' => array('Product.parent_id'=>3,
		'OR'=>array( 
                'Product.name LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.descrition LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.price LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.advetiser_name LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.mnf_name LIKE' => '%'.$this->request->query['keyword'].'%', 
			    'Product.sku LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Look.caption_name LIKE' => '%'.$this->request->query['keyword'].'%', 
				'User.username LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Category.name LIKE' => '%'.$this->request->query['keyword'].'%',
               ))); 
			   $results = $this->paginate('Product'); 
			   $this->set('allProducts', $results); 
		}
		
		else if (!empty($id))
		{ 
			 $this->paginate = array('conditions' => array('Product.Parent_id' => $id )); 
			 $results = $this->paginate('Product'); 
			 $this->set('allProducts', $results); 
		} 
		
	
		
		else
		{
			 $results = $this->paginate('Product'); 
			  $this->set('allProducts', $results); 
		}
		
		
		
	}
	
	
	
	public function serach() {
	
		if (!empty($this->request->query['keyword'])) { 
		$this->paginate = array('conditions' => array(
		'OR'=>array( 
                'Product.name LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.descrition LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.price LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.advetiser_name LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Product.mnf_name LIKE' => '%'.$this->request->query['keyword'].'%', 
			    'Product.sku LIKE' => '%'.$this->request->query['keyword'].'%', 
				'Look.caption_name LIKE' => '%'.$this->request->query['keyword'].'%', 
				
				
               ))); 
			   $results = $this->paginate('Product'); 
			  $this->set('allProducts', $results); 
		} 
		else
		{
			 $results = $this->paginate('Product'); 
			  $this->set('allProducts', $results); 
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
	
	
	
	public function product_gallery_men()
	{
		
		$this->set('looks', $this->Look->find('all', array('conditions' => array(),'group'=>'Look.order_id')));

		
		$men_product_list=$this->Product->find('all', array('conditions' => array('Product.parent_id' => '2'), 'order' => array('Product.id' => 'DESC'),'limit' => '12'));
		$this->set('products', $men_product_list);
		
	}
	
	public function product_gallery_women()
	{
		$this->set('looks', $this->Look->find('all', array('conditions' => array(),'group'=>'Look.order_id')));
		$women_product_list=$this->Product->find('all', array('conditions' => array('Product.parent_id' => '3'), 'order' => array('Product.created' => 'DESC'),'limit' => '12'));
		$this->set('products', $women_product_list);
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
	
	function individual_member($productid=null)
	{
		$looks = $this->Look->find('first', array('conditions' => array('Look.product_id' => $productid )));
		$this->set('looks', $looks);
		$user_id = $looks['User']['id'];
		$product_id = $looks['Product']['id'];
		
		$totallike = $this->Like->find('count', array('conditions'=>array('Like.user_id'=>$this->user['id'])));
		$this->set('totalLike', $totallike);
		

		if(!empty($user_id))
		{
			$userlooks = $this->Look->find('all', array('conditions' => array('Look.user_id' => $user_id )));
			
			$this->set('memberLooks',$userlooks);
		
			
		}
		
		if(!empty($product_id))
		{
			$productlists = $this->Look->find('all', array('conditions' => array('Look.product_id' => $product_id ),'limit'=>3));
			$this->set('memberImages',$productlists);
			
			
		}
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
}