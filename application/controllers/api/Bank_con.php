<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_con extends CI_Controller{
	public function __construct(){
		parent ::__construct();	
		$this->load->model('rest_api/Bank_model', 'bank');

	}
	public function Bank(){
		$result =$this->bank->get();
		$respon = array( 
			'msg' 	=> 'rek tidak ditemukan',
			'data' 	=> $result->result(),
			'err' 	=> null,
		);

		header('Content-Type: application/json');
		echo json_encode($respon);

	}
}