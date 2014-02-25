<?php class LooksController extends AppController {
	var $uses = array('Look','Order','Product','Category','Like');
	var $helpers = array('Form', 'Country');
	var $components = array('Session','Image');
	var $layout = 'default';
	
    public function beforeFilter(){
		parent::beforeFilter();
    }
	
    public function index() 
	{
		
    }
	
	function search_esmees() {
			
			
	
	}
	
	public function member_pictures_gallery()
	{
		$this->set('categories', $this->Category->find('all'));
		$alllooks =$this->Look->find('all');
		$this->set('allLooks', $alllooks);
		
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
	

	
	function memberdetails($productid=null){
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