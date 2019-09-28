<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian_model extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_pembelian');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function get(){
		$this->db->select('*');
		$this->db->from('tbl_pembelian');
		$this->db->join('tbl_produk','tbl_produk.id_produk=tbl_pembelian.id_produk');
		$this->db->join('tbl_user as user', 'user.id_user=tbl_pembelian.id_pembeli');	

		return $this->db->get();
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */