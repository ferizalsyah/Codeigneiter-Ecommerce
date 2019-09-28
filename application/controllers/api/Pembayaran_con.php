<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembayaran_con extends CI_Controller{
	public function __construct(){
		parent::__construct();	
		$this->load->model('rest_api/Pembayaran_model', 'bayar');

	}
	// public function get(){
	// 	$result =$this->bayar->show_bayar();
	// 	$respone =array(
	// 		'status' => TRUE,
	// 		'msg'	 => 'pembayaran',
	// 		'err'	 =>null,
	// 	);
	// 	header('Content-Type = application/json');
	// 	echo json_encode ($respone);
	// }
	// public function get_bayar($id){
	// 	$result =$this->bayar->get_bayar($id);
	// 	$respone =array(
	// 		'status' => TRUE,
	// 		'msg'	 => 'belum pembayaran',
	// 		'err'	 =>null,
	// 	);

	// 	header('Content-Type = application/json');
	// 	echo json_encode ($respone);
	// }
	public function get_bayar(){
		$this->db->select('*');
		$this->db->from('tbl_pembayaran byr')
		$this->db->join('tbl_pembelian pr' , 'pr.id_produk=byr.id_pembayaran=tbl_pembelian.id_pembelian');
		$this->where(array(' id_pembayaran' =$id));
		return =$this->db->get()->result();
	}
	public function bayar(){
		$id_pembelian =$this->db->where('tbl_pembayaran');
	}
	
	function show_bayar(){
		return $this->db->get('tbl_pembayaran');
	}
	function get_bayar_by($id) {
		$this->db->select('*');
		$this->db->from('tbl_pembayaran byr');
		$this->db->join('tbl_pembelian kt', 'byr.id_pembayaran=kt.id_pembelian=tbl_pembelian.id_pembelian');
		$this->db->where(array('byr.id_pembayaran' => $id ));
		return $this->db->get()->result();
	
	}
  }









