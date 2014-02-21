<?php class LooksController extends AppController {
	var $uses = array('Look','Order','Like');
	var $helpers = array('Form', 'Country');
	var $components = array('Session','Image');
	var $layout = 'default';
	
    public function beforeFilter(){
		parent::beforeFilter();
    }
	
    public function index() 
	{
		
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