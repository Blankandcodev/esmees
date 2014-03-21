<?php
	class CornsController extends AppController {
	var $uses = array('Link');
	
	public function fetch_commissionls()
		{
	$URI = 'https://reportws.linksynergy.com/downloadreport.php?bdate=20140301&edate=20140319&token=cd4f37dc86a07f7845f3d54a4c594f6fdd45a96355367de7348e3c77971aebd9&nid=1&reportid=12';
		
		$querryResult = file_get_contents($URI, false);
		$Data = str_getcsv($querryResult, "\n");
		
		$data = array();
		$array = array();
		$i = 0;
		 foreach ($Data as $key => $val)
			{
			if($key!=0)
			
			{
			$array[] = str_getcsv($val);
			
			$member_id = $array[$i][0];
            $merchant_id = $array[$i][1];
            $merchant_name = $array[$i][2];
            $order_id = $array[$i][3];
            $transaction_date = $array[$i][4];
            $transaction_time = $array[$i][5];
            $sku_number = $array[$i][6];
            $sales = $array[$i][7];
			$quantity = $array[$i][8];
            $commissions = $array[$i][9];
            $process_date = $array[$i][10];
            $process_time =$array[$i][11];
            
			$i++;
            
			$data['Link']['member_id'] = $member_id;
			$data['Link']['merchant_id'] = $merchant_id;
			$data['Link']['merchant_name'] = $merchant_name;
			$data['Link']['order_id'] = $order_id;
			$data['Link']['transaction_date'] = $transaction_date;
			$data['Link']['transaction_time'] = $transaction_time;
			$data['Link']['sku_number'] = $sku_number;
			$data['Link']['sales'] = $sales;
			$data['Link']['quantity'] = $quantity;
			$data['Link']['commissions'] = $commissions;
			$data['Link']['process_date'] = $process_date;
			$data['Link']['process_time'] = $process_time;
			
			$this->Link->create();
			
			if ($this->Link->save($data)) {
			 $this->Session->setFlash(__('The Commission has been saved.'), 'flash_success');
			 
			
			}
			else
			{
				$this->Session->setFlash(__('The  Commission not be saved. Please, try again.', 'flash_success'));
			}
		}
			
		} 
		
}

   public function fetch_commission_cj()
   {
			$URI = 'https://commission-detail.api.cj.com/v3/commissions?date-type=posting&action-types=sale&website-ids=7386303';
			$context = stream_context_create(
			array(
				'http' => array(
					'method' => 'GET',
					'header' => 'Authorization:  009a4361d95c8e2bdce29187482ade06d25c54353bcbd8f380a2302f4358784d95be510873a64c2785e4bdd76a0876e68a8e6dfe46f462d5c585e420f2fa2c63c9/1ceeee775a48c02959c579de2b4c21736b25d0263b01a20a4a61473c1667da0523a54c62d9a9fb4fa0e5eaebb5f94f2a134d1d94e05ac90b26e3e27c09ef2801'
				)
			)
		);
		$querryResult = file_get_contents($URI, false, $context);
		$response = json_decode(json_encode((array) simplexml_load_string($querryResult)), 1);
		$this->set('commissionCj', $response);
   }
   
   
   public function add()
   {
		echo "demo Testing";
   }
}

?>