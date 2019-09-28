<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_model extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}

	function show_kategori() {
		return $this->db->get('tbl_kategori');
	}

	function get_produk_by_kat($id) {
		$this->db->select('*');
		$this->db->from('tbl_produk pro');
		$this->db->join('tbl_kategori kt', 'pro.id_kategori=kt.id_nomor');
		$this->db->where(array('pro.id_kategori' => $id ));
		return $this->db->get()->result();
	}

	function get_description_produk($id_produk) {
		$this->db->select('*')->from('tbl_produk pro')->where(array('id_produk' => $id_produk));
		return $this->db->get()->result();
	}
}