 <?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim_con extends CI_Controller{
	public function __construct(){
		parent ::__construct();	
		$this->load->model('rest_api/Kirim_model', 'kirim');

	}
	public function Kirim(){
		$json 	= file_get_contents('php://input');
		$data 	= json_decode($json, TRUE);
		$ongkir = $data['ongkir'];
		$kota 	= $data['kota'];

		if(empty($ongkir) && empty($kota)){
			$respon = array(
				'msg'  => 'masukan no alamat',
				'data' =>null,
				'data' => null
			);
		}else{
			$result =$this->kirim->get('$ongki');
				$respon = array( 
					'msg' 	=> 'alamat tidak ditemukan',
					'data' 	=> $result->result(),
					'err' 	=> null,
				);
			
		
		
		header('Content-Type: application/json');
		echo json_encode($respon);

	}
}