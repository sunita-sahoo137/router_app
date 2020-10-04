<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restclient extends CI_Controller {

	public function index(){
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('restclient');
		$this->load->view('footer');
	}

	function createRouter(){
		//print_r($this->input->post('api_key'));die;
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => base_url()."restserver/createrouter",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_HTTPHEADER => array(
		    "API-KEY: ".$this->input->post('api_key'),
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
	}

	function updateRouter(){
		$postdata = array(
			'loopback'=>$this->input->post('loopback'),
			'sapid'=>$this->input->post('sapid'),
			'hostname'=>$this->input->post('hostname'),
			'mac_address'=>$this->input->post('mac_address'),
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => base_url()."restserver/routerip",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $postdata,
		  CURLOPT_HTTPHEADER => array(
		    "API-KEY: c!sko_router",
		    "cache-control: no-cache",
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}

	}

	function getrouterbysapid(){
		//print_r($this->input->post('api_key'));die;
		$sapid = $this->input->post('sapid');
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => base_url()."restserver/routerbysapid/".$sapid,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_HTTPHEADER => array(
		    "API-KEY: ".$this->input->post('api_key'),
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
	}

	function getrouterbyiprange(){
		$loopback = $this->input->post('loopback');
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => base_url()."restserver/routerbyiprange/".$loopback,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_HTTPHEADER => array(
		    "API-KEY: ".$this->input->post('api_key'),
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
	}


	function deleterouterbyip(){
		$loopback = $this->input->post('loopback');
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => base_url()."restserver/deleterouterbyip/".$loopback,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "DELETE",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_HTTPHEADER => array(
		    "API-KEY: ".$this->input->post('api_key'),
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
	}

}