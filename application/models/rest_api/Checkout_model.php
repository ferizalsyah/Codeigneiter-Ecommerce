<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout_model extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}

	function show_Produk() {
		return $this->db->get('tbl_checkout');
	}
	function post_produk_by_cek($id) {
		$this->db->select('*');
		$this->db->from('tbl_produk pro');
		$this->db->join('tbl_checkout cek', 'pro.id_checkout=cek.id_produk');
		$this->db->where(array('pro.id_checkout' => $id));
		return $this->db->get()->result();
	}
}