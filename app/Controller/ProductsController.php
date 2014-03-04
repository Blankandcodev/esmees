<?php class ProductsController extends AppController {
	var $uses = array('Product','Order','Look','User','Category','Like');
	var $helpers = array('Form', 'Country');
	var $components = array('Session');
	var $layout = 'default';
	
	public function beforeFilter(){
        parent::beforeFilter();
		
  }
	
    public function index() 
	{
		
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

	
   
	
	public function men()
	{
	
		$this->set('looks', $this->Look->find('all', array('conditions' => array(),'group'=>'Look.order_id')));
		
		$men_product_list=$this->Product->find('all', array('conditions' => array('Product.parent_id' => '2' )));
		$this->set('products', $men_product_list);
    }
	public function women()
	{
		$this->set('looks', $this->Look->find('all', array('conditions' => array(),'group'=>'Look.order_id')));
		
		$women_product_list=$this->Product->find('all', array('conditions' => array('Product.parent_id' => '3' )));
		$this->set('products', $women_product_list);
    }
	public function product_details($productId=null)
	{
			
		
		
		if(!empty($productId))
		{
			
			$details=$this->Product->find('first', array('conditions' => array('Product.id' => $productId )));
			$this->set('products', $details);  
	
			
			
			
			
			$whowearlists = $this->Product->find('all',array('conditions' => array('Product.id' => $productId)));
			$this->set('whoWears',$whowearlists);
			
			
			
			
			$mname=	$this->Product->find('first', array('conditions'=>array('id'=>$productId),'fields'=>array('Product.mnf_name')));
			$this->set('brands', $mname); 
			
			
			
			$brandlists = $this->Order->find('all',array('conditions' => array('Product.id' => $productId, 'Product.mnf_name'=>$mname['Product']['mnf_name'])));
			$this->set('userBrands',$brandlists);
			
			
			
			
			$orderlists = $this->Order->find('all', array('conditions'=>array('Order.product_id'=> $productId)));
			
			$this->set('userLists', $orderlists);
			
		}
			
		
		
		
    }
	
	public function men_gallery($id=null ,$bname=null)
	{
		$allChildren = $this->Category->children(2);
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