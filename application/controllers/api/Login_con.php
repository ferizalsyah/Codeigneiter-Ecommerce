<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_con extends CI_Controller{
	public function __construct(){
		parent ::__construct();	
		$this->load->model('rest_api/User_model', 'user');

	}
	public function Login(){
		$json 		= file_get_contents('php://input');
		$data 		= json_decode($json, TRUE);
		$email 		= $data['email'];
		$password 	= $data['password'];

		if(empty($email) && empty($password)){
			$respon = array(
				'status' 	=> TRUE,
				'massage' 	=> 'lengkapi semua filed!!',
				'data' 		=> null
			);
		}else{
			$result =$this->user->authLogin( $email, $password);



			/* jika data ditemukan maka*/
			if($result->num_rows() > 0 ) {


				/* data untuk disimpan */
				/* token ini berfungsi sebaggai autentikasi atau pengaman suatu api */

				$data = $result->row();
				

				/* hash token autentikasi */
				$token= md5($data->username.$data->password);



				/* save token login */
				$this->db->where('id_user', $data->id_user);
				$this->db->update('tbl_user', array('token_login' => $token));


				$respon 		= array(
					'massage' 	=> 'anda diperbolehkan login',
					'token' 	=> $token,
					'err' 		=> null,
					'data' 		=> $result->num_rows()

				);


			}else{
				$respon 		= array(
					'massage' 	=> 'data tidak ditemukan',
					'token' 	=> null,
					'err' 		=> null,
				);
				
			}

		}

		/* return respons to the users*/
		header('Content-Type: application/json');
		echo json_encode($respon);

	}
}