<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kirim_model extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}
	public function get(){
		return $this->db->POST('alamat_pengiriman');
		$this->db->where($query);
		$result =$this->db->get();

	}
}
