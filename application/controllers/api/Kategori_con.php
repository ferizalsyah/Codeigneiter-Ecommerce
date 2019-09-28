<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_con extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model('rest_api/Kategori_model', 'kt');

	}
	public function get(){
		$json = file_get_contents('php://input');
		$data = json_decode($json, TRUE);
		$result =$this->kt->show_kategori();
		$respon = array(
			'msg' => 'menampilkan seluruh kategori', 	
			'data' => $result->result(),
			'err' =>null,
		);
			
		header('Content-Type: application/json');
		echo json_encode($respon);
	}

	public function get_produk_by_kategori($id_kat) {
		$result = $this->kt->get_produk_by_kat($id_kat);
		$respon = array(
			'msg' => 'berasil input', 	
			'data' => $result,
			'err' =>null,
		);
			
		header('Content-Type: application/json');
		echo json_encode($respon);	
	}


	public function get_desc_produk($id) {
		$result = $this->kt->get_description_produk($id);
		$respon = array(
			'msg' => 'berasil input', 	
			'data' => $result,
			'err' =>null,
		);
			
		header('Content-Type: application/json');
		echo json_encode($respon);		
	}
}