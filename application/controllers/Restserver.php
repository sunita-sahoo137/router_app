<?php
require(APPPATH.'/libraries/REST_Controller.php');
 
class Restserver extends REST_Controller { 
	public function __construct() {
      parent::__construct(); 
      $this->load->model('RoutersModel');         
    }

    function createrouter_post(){
    	$data = [];
    	$data['sapid'] = bin2hex(random_bytes(9));
		$data['hostname'] = bin2hex(random_bytes(7));
		$data['loopback'] = long2ip(mt_rand());
		$data['mac_address'] = implode(':', str_split(substr(md5(mt_rand()), 0, 12), 2));


		$result=$this->RoutersModel->saveRouter($data);
		if($result){
			$this->response(array('status'=>'success','message' => 'Router created successfully.'), 200);
		}else{
			$this->response(array('status'=>'error','message' => 'Something went wrong.'), 404);
		}
    }

    function routerip_post(){
    	$data=$this->input->post();
    	$check_loopback = $this->db->select('loopback')->from('routers')
		->where(array('routers.loopback'=>$data['loopback']))->get()->row();  
		if(!$check_loopback){
			$this->response(array('status'=>'error','message' => 'Loopback not found.'), 404);
		}


		$this->load->library('form_validation');
		$validate_msg = '';

		$check_sapid = $this->db->select('sapid')->from('routers')
		->where(array('routers.loopback !='=>$data['loopback'],'routers.sapid'=>$data['sapid']))->get()->row();  
		if($check_sapid){
			$validate_msg .= 'This sapid is already used. \n ';
		}
		$check_hostname = $this->db->select('hostname')->from('routers')->where(array('routers.loopback !='=>$data['loopback'],'routers.hostname'=>$data['hostname']))->get()->row();    
		if($check_hostname){
			$validate_msg .= 'This hostname is already used. \n ';
		}
		
		$check_mac_address = $this->db->select('mac_address')->from('routers')->where(array('routers.loopback !='=>$data['loopback'],'routers.mac_address'=>$data['mac_address']))->get()->row();    
		if($check_mac_address){
			$validate_msg .= 'This mac_address is already used. \n ';
		}

		if (!filter_var($data['mac_address'], FILTER_VALIDATE_MAC)) {
		 	$validate_msg .= 'Please enter a valid mac address. ';
		}

		if($validate_msg != ''){
			$data['result'] = array('status'=>'error',
				'message' => $validate_msg
			);
			$this->response($data['result'], 404);
		}


    	$this->form_validation->set_rules('sapid', 'sapid', 'min_length[18]|max_length[18]|required[routers.sapid]');
		$this->form_validation->set_rules('hostname', 'Hostname', 'min_length[14]|max_length[14]|required[routers.hostname]');
		$this->form_validation->set_rules('mac_address', 'Mac Address', 'min_length[17]|max_length[17]|required[routers.mac_address]');
		if ($this->form_validation->run() == FALSE) {
			$this->response(array('status'=>'error','message' => validation_errors()), 404);
	    }else{
			
			$result=$this->RoutersModel->updateRouterDetails($data,'loopback');
			$this->response(array('status'=>'success','message' => 'Router updated successfully.'), 200);
		}

    	
    }

    function routerbysapid_get($sapid =''){
    	if($sapid == ''){
    		$this->response(array('status'=>'error','message' => 'sapid undefined.'), 404);
    	}
    	$routers=new RoutersModel;
    	$result=$routers->getRouterDetailsBySapid($sapid);
    	$this->response(array('status'=>'success','message' => '','data'=>$result), 200);
    }
    function routerbyiprange_get($iprange =''){
    	if($iprange == ''){
    		$this->response(array('status'=>'error','message' => 'Iprange undefined.'), 404);
    	}
    	$routers=new RoutersModel;
    	$result=$routers->getRouterDetailsByIprange($iprange);
    	$this->response(array('status'=>'success','message' => '','data'=>$result), 200);
    }
    function deleterouterbyip_delete($ip =''){
    	if($ip == ''){
    		$this->response(array('status'=>'error','message' => 'IP address undefined.'), 404);
    	}
    	$routers=new RoutersModel;
    	$result=$routers->deleteRouterByIp($ip);
    	if($result){
    		$this->response(array('status'=>'success','message' => 'Router deleted successfully.'), 200);
    	}else{
    		$this->response(array('status'=>'error','message' => 'Router not found.'), 200);
    	}
    	
    }
 
}