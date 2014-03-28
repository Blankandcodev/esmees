<?php App::uses('AppController', 'Controller');
class CronController extends AppController{
    public $name = 'Corn';
    public $helpers = array('Html', 'Form', 'Js');
    public $components = array('RequestHandler', 'Image', 'Email');
	public $caronStatus;
	public $mailStatus;
	var $uses = array('Cron', 'Lsorder', 'Order', 'Product', 'User', 'Commission', 'Adv');
	
	public function beforeFilter(){
        parent::beforeFilter();
    }
	
	public function sendmail(){
		$this->sendlsemail();
		$this->sendcjemail();
		echo $this->mailStatus;
		exit;
	}
	
	public function fetchsavedata(){
		$this->fatchlsdata();
		$this->saveorder();
		$this->savelscommission();
		echo $this->caronStatus;
		exit;
	}
	public function fatchlsdata($date = null){
		if($date == null){
			$date = date('Ymd');
		}
		$URI = 'https://reportws.linksynergy.com/downloadreport.php?bdate='.$date.'&edate='.$date.'&token=cd4f37dc86a07f7845f3d54a4c594f6fdd45a96355367de7348e3c77971aebd9&nid=1&reportid=12';
		
		$querryResult = file_get_contents($URI, false);
		$Data = str_getcsv($querryResult, "\n");
		$status = 'SUCCESS';
		$data = array();
		$array = array();
		$i = 0;
		pr($Data);
		die;
		foreach ($Data as $key => $val){
			if($i > 0){
				$array = str_getcsv($val);				
				$member_id = $array[0];
				$merchant_id = $array[1];
				$merchant_name = $array[2];
				$order_id = $array[3];
				$transaction_date = $array[4];
				$transaction_time = $array[5];
				$sku_number = $array[6];
				$sales = $array[7];
				$quantity = $array[8];
				$commissions = $array[9];
				$process_date = $array[10];
				$process_time =$array[11];
				$process_date = date('Y-m-d', strtotime($process_date));
				$transaction_date = date('Y-m-d', strtotime($transaction_date));
				
				$data['Lsorder']['member_id'] = $member_id;
				$data['Lsorder']['adv_id'] = $merchant_id;
				$data['Lsorder']['merchant_name'] = $merchant_name;
				$data['Lsorder']['order_id'] = $order_id;
				$data['Lsorder']['transaction_date'] = $transaction_date;
				$data['Lsorder']['transaction_time'] = $transaction_time;
				$data['Lsorder']['sku_number'] = $sku_number;
				$data['Lsorder']['sales'] = $sales;
				$data['Lsorder']['quantity'] = $quantity;
				$data['Lsorder']['commissions'] = $commissions;
				$data['Lsorder']['process_date'] = $process_date;
				
				$data['Lsorder']['process_time'] = $process_time;
				
				$exist = $this->Lsorder->find('first', array('fields'=> 'Lsorder.id','conditions'=>array('Lsorder.order_id' => $order_id, 'Lsorder.sku_number' => $sku_number)));
				
				if(empty($exist)){
					$this->Lsorder->create();
					if ($this->Lsorder->save($data)){
						$this->caronStatus .= "<br/>Record $i saved <br/>";
					}
					else{
						$this->caronStatus .= "ERROR";
						$status = "ERROR";
					}
				}
			}
			$i++;
		}
		return $status;
	}
	
	public function saveorder(){
		$status = 'SUCCESS';
		$lorders = $this->Lsorder->find('all', array('conditions'=>array('Lsorder.status' => 0)));
		$i = 0;
		foreach($lorders as $order){
			$maray = explode("-", $order['Lsorder']['member_id']);
			$mid = $maray[1];
			
			$product = $this->Product->find('first', array('fields'=>
			'Product.id','conditions'=>array('Product.sku' => $order['Lsorder']['sku_number'])));
			
			$user = $this->User->find('first', array('fields'=>
			'User.id','conditions'=>array('User.member_id' => $mid)));
			if(!empty($product) && !empty($user)){
				$data = array();
				$data['Order']['order_id'] = $order['Lsorder']['order_id'];
				$data['Order']['product_id'] = $product['Product']['id'];
				$data['Order']['user_id'] = $user['User']['id'];
				$data['Order']['order_date'] = $order['Lsorder']['transaction_date'];
				
				$this->Order->create();
				if ($this->Order->save($data)){
					$this->caronStatus .= "<br/>Order $i saved <br/>";
				}
				else{
					$this->caronStatus = "ERROR";
					$status = "ERROR";
				}
			}
			$this->Lsorder->id = $order['Lsorder']['id'];
			$this->Lsorder->saveField('status', '1');
			$i++;
		}
		return $status;
	}
	
	public function savelscommission(){
		$status = 'SUCCESS';
		$lorders = $this->Lsorder->find('all', array('conditions'=>array('Lsorder.status' => 1)));
		$i = 0;
		foreach($lorders as $order){
			$maray = explode("-", $order['Lsorder']['member_id']);
			$mid = $maray[0];			
			$user = $this->User->find('first', array('fields'=> 'User.id','conditions'=>array('User.member_id' => $mid)));
			$adv = $this->Adv->find('first',array('fields'=>'Adv.vested_period', 'conditions' => array('Adv.adv_id' => $order['Lsorder']['adv_id'])));
			if(!empty($adv)){
				$vestper = $adv['Adv']['vested_period'];
			}else{
				$vestper = 1;
			}
			if(!empty($user)){
				$data = array();
				
				$date = date_create($order['Lsorder']['transaction_date']);
				date_modify($date, "+".$vestper." days");
				
				$uCommission = 0;
				if($mid != 'ESMADMIN'  || $mid[0] == $mid[1]){
					$uCommission = ($order['Lsorder']['commissions'] * 50)/100;
				}
				
				$data['Commission']['member_id'] = $order['Lsorder']['member_id'];
				$data['Commission']['adv_id'] = $order['Lsorder']['adv_id'];
				$data['Commission']['user_id'] = $user['User']['id'];
				$data['Commission']['order_id'] = $order['Lsorder']['order_id'];
				$data['Commission']['transaction_date'] = $order['Lsorder']['transaction_date'];
				$data['Commission']['transaction_time'] = $order['Lsorder']['transaction_time'];
				$data['Commission']['sku_number'] = $order['Lsorder']['sku_number'];
				$data['Commission']['program'] = 'LS';
				$data['Commission']['sales'] = $order['Lsorder']['sales'];
				$data['Commission']['quantity'] = $order['Lsorder']['quantity'];
				$data['Commission']['commissions'] = $order['Lsorder']['commissions'];
				$data['Commission']['user_commission'] = $uCommission;
				$data['Commission']['process_date'] = $order['Lsorder']['process_date'];
				$data['Commission']['vesting_date'] = date_format($date, 'Y-m-d');
				
				
				$this->Commission->create();
				if ($this->Commission->save($data)){
					$this->Lsorder->id = $order['Lsorder']['id'];
					$this->Lsorder->saveField('status', '2');
					$this->caronStatus .= "<br/>Commission $i saved<br/>";
				}else{
					$this->caronStatus .= "ERROR";
					$status = "ERROR";
				}
			}
			$i++;
		}
		return $status;
	}
	
	public function sendlsemail(){
		$lorders = $this->Lsorder->find('all', array('conditions'=>array('Lsorder.email' => 0)));
		foreach($lorders as $order){
			$maray = explode("-", $order['Lsorder']['member_id']);
			$mid = $maray[1];
			if($mid != 'ESMGUEST'){
				$user = $this->User->find('first', array('conditions'=>array('User.member_id' => $mid)));
				if(!empty($user)){
					if($this->sendInviteMail($user['User'])){
						$this->Lsorder->id = $order['Lsorder']['id'];
						$this->Lsorder->saveField('email', 1);
					};
				}
				$this->mailStatus .= "email send <br/>";
			}
		}
	}
	public function sendInviteMail($data = array()){
        if ($data != NULL){
            $this->Email->to =$data['username'];
            $this->Email->subject = 'Welcome to Esmees.com';
            $this->Email->from = 'Esmees <Subodh@blankandco.com>';
			$this->set('data', $data);
			$this->Email->template = 'invite';
            $this->Email->sendAs = 'html';
			if ($this->Email->send()) {
				return true;
			} else {				
				return false;	
			}
		}
	}
}