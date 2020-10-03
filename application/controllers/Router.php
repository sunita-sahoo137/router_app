<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Router extends CI_Controller {
	public function __construct() {
      parent::__construct(); 
      $this->load->model('RoutersModel');         
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('router/index');
		$this->load->view('footer');
	}
	public function addRouter()
	{	
		$data['sapid']=$this->input->post('sapid');
		$data['hostname']=$this->input->post('hostname');
		$data['loopback']=$this->input->post('loopback');
		$data['mac_address']=$this->input->post('mac_address');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('sapid', 'sapid', 'required|min_length[18]|max_length[18]|is_unique[routers.sapid]');
		$this->form_validation->set_rules('hostname', 'Hostname', 'required|min_length[14]|max_length[14]|is_unique[routers.hostname]');
		$this->form_validation->set_rules('loopback', 'Loopback', 'required|max_length[15]|is_unique[routers.loopback]');
		$this->form_validation->set_rules('mac_address', 'Mac Address', 'required|min_length[17]|max_length[17]|is_unique[routers.mac_address]');

		if ($this->form_validation->run() == FALSE) {
			$data['result'] = array('status'=>'error',
				'message' => validation_errors()
			);
	        //echo validation_errors();
	    }else{

			$result=$this->RoutersModel->saveRouter($data);
			$data['result'] = array('status'=>'success',
				'message' => 'Router added successfully.'
			);
			
		}
		echo json_encode($data['result']);
	}

	public function getRouterList()
	{
		$routers=new RoutersModel;
        $result['data']=$routers->getRouters();
        echo json_encode($result);
	}
	public function getRouterDetails()
	{
		$id=$this->input->post('id');
		$routers=new RoutersModel;
        $result=$routers->getRouterDetails($id);
        echo json_encode($result);
	}

	public function updateRouter()
	{	
		$data['sapid']=$this->input->post('sapid');
		$data['hostname']=$this->input->post('hostname');
		$data['loopback']=$this->input->post('loopback');
		$data['mac_address']=$this->input->post('mac_address');
		$data['id']=$this->input->post('id');
		$this->load->library('form_validation');

		$check_sapid = $this->db->select('sapid')->from('routers')
		->where(array('routers.id !='=>$data['id'],'routers.sapid'=>$data['sapid']))->get()->row();  
		if($check_sapid){
			$data['result'] = array('status'=>'error',
				'message' => 'This sapid is already used.'
			);
			echo json_encode($data['result']);die;
		}
		$check_hostname = $this->db->select('hostname')->from('routers')->where(array('routers.id !='=>$data['id'],'routers.hostname'=>$data['hostname']))->get()->row();    
		if($check_hostname){
			$data['result'] = array('status'=>'error',
				'message' => 'This hostname is already used.'
			);
			echo json_encode($data['result']);die;
		}
		$check_loopback = $this->db->select('loopback')->from('routers')->where(array('routers.id !='=>$data['id'],'routers.loopback'=>$data['loopback']))->get()->row();    
		if($check_loopback){
			$data['result'] = array('status'=>'error',
				'message' => 'This loopback is already used.'
			);
			echo json_encode($data['result']);die;
		}
		$check_mac_address = $this->db->select('mac_address')->from('routers')->where(array('routers.id !='=>$data['id'],'routers.mac_address'=>$data['mac_address']))->get()->row();    
		if($check_mac_address){
			$data['result'] = array('status'=>'error',
				'message' => 'This mac_address is already used.'
			);
			echo json_encode($data['result']);die;
		}
		//echo validation_errors();die;
		$this->form_validation->set_rules('sapid', 'sapid', 'min_length[18]|max_length[18]|required[routers.sapid]');
		$this->form_validation->set_rules('hostname', 'Hostname', 'min_length[14]|max_length[14]|required[routers.hostname]');
		$this->form_validation->set_rules('loopback', 'Loopback', 'max_length[15]|required[routers.loopback]');
		$this->form_validation->set_rules('mac_address', 'Mac Address', 'min_length[17]|max_length[17]|required[routers.mac_address]');

		if ($this->form_validation->run() == FALSE) {
			$data['result'] = array('status'=>'error',
				'message' => validation_errors()
			);
	        //echo validation_errors();
	    }else{

			$result=$this->RoutersModel->updateRouter($data);
			$data['result'] = array('status'=>'success',
				'message' => 'Router updated successfully.'
			);
			
		}
		echo json_encode($data['result']);
	}
	public function deleteRouter()
	{
		$id=$this->input->post('id');
		$routers=new RoutersModel;
        $result=$routers->deleteRouter($id);
        echo json_encode($result);
	}
}
// https://www.thetopsites.net/article/53665547.shtml#:~:text=If%20a%20new%20customer%20name,value%20exists%20in%20the%20database.