<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Con extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model('rest_api/User_model', 'user');

	}
	public function Login(){
		$json 		= file_get_contents('php://input');
		$data 		= json_decode($json, TRUE);

		
		$result = $this->user->authLogin( $data['email'], $data['password']);
		if($result->num_rows() > 0 ) {
			$respon = array( 
				'msg' 	=> 'data sama silahkan login',
				'data' 	=> $result->row(),
				'err' 	=> null,
			);
		} else {
			$respon = array( 
				'msg' 	=> 'data akun tidak ditemukan',
				'data' 	=> $result->row(),
				'result' => $result->row()
				'ss ' => $data
			);
		}

		header('Content-Type: application/json');
		echo json_encode($respon);

	}


	public function profile() {
		$json 		= file_get_contents('php://input');
		$data 		= json_decode($json, TRUE);

		die($data);
		$result = $this->db->get_where('tbl_user', array('token_login' => $data['token']))->row();

		$respon = array( 
			'msg' 	=> 'data akun tidak ditemukan',
			'data' 	=> $result,
			'err' 	=> null,
			'ss ' => $data
		);

		header('Content-Type: application/json');
		echo json_encode($respon);
	}
}