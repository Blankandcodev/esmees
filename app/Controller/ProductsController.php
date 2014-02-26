<?php class ProductsController extends AppController {
	var $uses = array('Product','Order','Look','User','Category','Like');
	var $helpers = array('Form', 'Country');
	var $components = array('Session','Paginator');
	var $layout = 'default';
    public $paginate = array('Product' => array(
            'limit' => 25,
            'order' => array(
		    'Product.name' => 'asc',
		    )
			),
            
    );
	


	
	
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
	
		$men_product_list=$this->Product->find('all', array('conditions' => array('Product.parent_id' => '2' )));
		$this->set('products', $men_product_list);
    }
	public function women()
	{
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
	
	public function all_product_gallery()
	{
	
		if($this->request->is('post')){
	    $keyword="";
	    $keyword = $this->data['searchProduct']['keywords'];
	
	    if(!empty($keyword)){
		
		 echo $keyword;
		 $this->Paginator->settings = array('conditions' => array('Product.name LIKE' => 'a%'), 'limit' => 10 );
		 $data = $this->Paginator->paginate('Product');
		
         $this->set('allProducts', $data);
	
		
		
	    }
		
		
		
		
		
		
		
		
		//$this->Paginator->settings = $this->paginate;

		// similar to findAll(), but fetches paged results
		//$data = $this->Paginator->paginate('Product');
		//$this->set('allProducts', $data);
		
		
		//if($this->request->is('post')){
	    
		
		//$designers = $this->paginate('Product',array('Product.name'=>$keyword));
	//	$this->set('searchResult', $keyword);
        
  
   
		
		
		//$allproduct =$this->Product->find('all');
		//$this->set('allProducts', $allproduct);
		//$brand_data = $this->Product->find('all',array('fields'=>'mnf_name','recursive'=>0,'group' => 'Product.mnf_name','conditions' => array('not' => array('Product.mnf_name'))));
		//$this->set('AllBrands',$brand_data);
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
	
	public function serach_product()
	{
		
	}
	
	
	
	
	
	
	
	
	
	
}