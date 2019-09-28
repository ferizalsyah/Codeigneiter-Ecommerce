<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Produk_model extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}

	fublic function duatable($result){
		$this->db->select(*);
		$this->db->from('tbl_kategori');
		$this->db->join('tbl_produk', 'tbl_produk.id_produk =tbl_kategori.id_nomor');
		$query =$this->db->get();
		return $query->result();
	}

}