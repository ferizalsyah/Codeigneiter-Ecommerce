<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian_model extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}
	function show_pembelian() {
		return $this->db->get('tbl_pembelian');
	}
	function get_show_by_beli($id_pembelian){
		$this->db->get('tbl_pembelian');
		return $this->db->get()->result();
	}

}