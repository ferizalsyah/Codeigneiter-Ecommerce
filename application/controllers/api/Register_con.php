<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_con extends CI_Controller{
	public function __construct(){
		parent::__construct();	
		$this->load->model('rest_api/Register_model', 'masuk');
}
	public function Register ($email, $username, $password){
		// $json 		= file_get_contents('php://input');
		// $data 		= json_decode($json, TRUE);
		// $email 		= $data['email'];
		// $password 	= $data['password'];

	}
	if(empty($email) && empty($password) && empty($username)){
		$respon =array(
			'msg'  => 'masuk'
			'data' =>null,
			'data' =>null,

		);
	}else{
		$result =$this->masuk->post('$tbl_user');
			$respon =array(
				'Msg' => 'tidak masuk',
				'data' => $result->result(),
				'err' => null,

			);
		$insert =$this->db->insert('tbl_user', $data);

		header('Content-Type: application/json');
		echo json_encode($respon);

	}

}