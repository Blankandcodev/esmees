<?php class ProductsController extends AppController {
	var $uses = array('Product','Order','Look','User');
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
		}
		
		$whowearlists = $this->Look->find('all',array('conditions' => array('Look.Product_id' => $productId )));
		$this->set('whoWears',$whowearlists);
		//debug($whowearlists);
		
    }
	
	
	
	
	
	
	
	
	
	
}