<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_con extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model('rest_api/Checkout_model', 'cek');

	}
	public function get(){
		$this->db->select('*')->from('tbl_checkout','chek');
		$this->db->join('tbl_produk', 'tbl_produk.id_produk=chek.id_user_cek');
		$this->db->where(array('id_produk' =>$id));
		return $this->db->get()->result(); 
	}		

	public function cek(){
		$id_produk_cek   	=$this->input->post('id_produk_cek');
		$id_user_cek 	    =$this->input->post('id_user_cek');
		$jumlah_produk 	    =$this->input->post('jumlah_produk');

		if(empty($id_produk_cek) && empty($id_user_cek)){
			$respone 	 = array(
				'status' => TRUE,
				'msg' 	 => 'proses checkout',
		 		'err' 	 => null
			);
		}else {
			$data =array(
				'id_produk_cek' =>$id_produk_cek,
				'id_user_cek' => $id_user_cek,
				'jumlah_produk' =>$jumlah_produk,
			);
			$this->db->insert('tbl_checkout', $data);	
				$respone = array(
					'msg'  => 'produk tidak ditemukan',
					'data' => $result->row(),
					'err'  => null,
				); 
			
		}
		header('Content-Type = application/json');
		echo json_encode ($respone);
	}
}