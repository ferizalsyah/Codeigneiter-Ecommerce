<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_user');
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

	/* this method aimed for statistic admin dashboard */

	function get_count_kategori() {
		return $this->db->get('tbl_kategori')->num_rows();

	}

	function get_count_users() {
		return $this->db->get('tbl_user')->num_rows();
	}


	function get_count_pembayaran_success() {
		 // menampilkan jumlah pembelian yang sudah dibayar 
		return $this->db->get_where('tbl_pebayaran')->num_rows();
	}

	function get_count_pembelian(){
		return $this->db->get('tbl_pembelian')->num_rows();
	}


	function get_count_produk(){
		return $this->db->get('tbl_produk')->num_rows();
	}

	function get_count_bank(){
		return $this->db->get('bank')->num_rows();
	}

	function get_count_pengiriman_by(){
		return $this->db->get('tbl_pengiriman')->num_rows();
	}

	function get_count_alamat(){
		return $this->db->get('alamat_pengiriman')->num_rows();
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */