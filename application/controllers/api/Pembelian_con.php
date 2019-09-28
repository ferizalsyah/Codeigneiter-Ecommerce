<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_con extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model('rest_api/Pembelian_model', 'beli');

	}	
	public function beli(){
		$json = file_get_contents('php://input');
		$data = json_decode($json, TRUE);

		$userid = $this->db->get_where('tbl_user', array('token_login' => $data['token']))->row()->id_user;


		$data = array(
			'id_produk' => $data['id_produk'],
			'id_pembeli' => $userid,
			'tanggal_pembelian' =>  date("Y-m-d"),
			'jumlah' => $data['jumlah'],
			'harga' => $data['harga'],
			'kode_resi' => $this->generateRandomString(),
			'id_status' => 1, // default pandding,
			'id_bank' => $data['id_bank'],
			'alamat'   => $data['alamat'],
		);




		$this->db->insert('tbl_pembelian', $data); 
		$respone = array(
			'msg' => 'pembelian barang berhasil',
			'data' => null,
			'error' => null,
		);

		header('Content-Type: application/json');
		echo json_encode($respone);


	}

	public function generateRandomString($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

}