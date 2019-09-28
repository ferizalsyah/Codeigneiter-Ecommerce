<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_con extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('rest_api/Kategori_model', 'kt');
	}

	public function get_produk_by_id() {
		/*
			menampilkan semua produk berdasdrkan jenis kategori 
			pengelompokan menggunakan nama kategori 
		*/
		$nama = $this->input->get('name');
		$this->db->select('tbl_produk.*')->from('tbl_produk');
		$this->db->join('tbl_kategori','tbl_produk.id_kategori=tbl_kategori.id_nomor');
		$this->db->where('tbl_kategori.kategori', strtolower($nama));
		$respon = array(
			'msg' 	=> 'data produk berdasarkan kategori',
			'data'  => $this->db->get()->result(), 
			'err' 	=> ''
		);

		header('Content-Type: application/json');
		echo json_encode($respon);
	}

// contoh get
	public function get_describ_produk() {
		/*
			api untuk menampilkan deskripsi lengkap dari suatu produk 
			digunakan dalam deskripsi lengkap di android 
			ex : 
				localhost/simantau/api/produk_con/get_describ_produk/?id=17
		*/


		$id_produk = $this->input->get('id_produk');


		$this->db->select('penjual.username as penjual, pro.*');
		$this->db->from('tbl_produk as pro');
		$this->db->join('tbl_kategori kategori', 'kategori.id_nomor=pro.id_kategori');
		$this->db->join('tbl_user as penjual', 'penjual.id_user=pro.id_user');
		$this->db->where('pro.id_produk', $id_produk);
		$respon = array(
			'msg' 	=> 'data produk berdasarkan kategori',
			'data'  => $this->db->get()->result(), 
			'err' 	=> ''
		);

		header('Content-Type: application/json');
		echo json_encode($respon);
	}


//  contoh get
	public function buy_produk() {
			$json = file_get_contents('php://input');
			$data = json_decode($json, TRUE);



			
			$data = array(
				'id_produk' => $data['id_produk'],
				'id_user_penjual' => $data['id_penjual'],
				'id_pembeli' => $data['id_pembeli'],
				'tanggal_pembelian' => date('Y-m-d'),
				'jumlah' => $data['jmlh'],
				'harga' => $data['harga'] * $data['jmlh'], //perhitungan harga total dilakukan di android 
				'id_status' => 1, // set as default 
				'id_alamat_kirim' => 1 //sessuaikan degnan alamat pemebeli saat awal atau pilih lokasi saat pembelian

			);

			$this->db->insert('tbl_pembelian', $data);
			$respon = array(
				'msg' => 'data sudah dipesan silahkan lakukan pembayaran',
				'err' => null,
			);

			header('Content-Type: application/json');
			echo json_encode($respon);
	}	



	public function new_favorite() {
		$json = file_get_contents('php://input');
		$body = json_decode($json, TRUE);

		/* check if produk has been save in favorite */
		$data  = $this->db->get_where('tbl_wishlist', array('id_produk' => $body['id_produk']))->num_rows();
		if( $data > 0 ) { 
			$respon = array(
				'msg' => 'data sudah pernah ditambahkan ke favorite ',
				'err' => null,
			);			
		}else {			
			$data = array(
				'id_produk' => $body['id_produk'],
				'id_user' 	=> $body['id_user'],
			);
			/* tambah pdouk yang disukai oleh pembeli*/
			$this->db->insert('tbl_wishlist', $data);
			$respon = array(
					'msg' => ' berhasil ditambahkan ke favorite ',
					'err' => null,
				);
		}
			header('Content-Type: application/json');
			echo json_encode($respon);
	}




	public function showAll_favorite() {
		$token = $this->input->get('token');


		$this->db->select('*')->from('tbl_wishlist');
		$this->db->join('tbl_produk as pro', 'pro.id_produk=tbl_wishlist.id_produk');
		$this->db->join('tbl_user as user', 'user.id_user=tbl_wishlist.id_user');
		$this->db->where('user.token_login', $token);
		
		$respon = array(
			'msg' => 'produk favorite ',
			'data' => $this->db->get()->result(),
			'jmlh_favorite' => $this->db->get_where('tbl_wishlist', array('id_user' => $id_user))->num_rows()

		);

			header('Content-Type: application/json');
			echo json_encode($respon);
	}


// contoh GET
	public function get_pembayaran_user() {
		
		$id_pembayaran = $this->input->get('id_user');

		$this->db->select('*');
		$this->db->from('tbl_pebayaran as bayar');
		$this->db->join('tbl_pembelian beli','beli.id_pembelian=bayar.id_pembelian');
		$this->db->join('tbl_produk produk','produk.id_produk=beli.id_produk');
		$this->db->join('tbl_user pembeli', 'pembeli.id_user=bayar.id_pembelian');
		$this->db->where('bayar.id_pembelian', $id_pembayaran);
		$this->db->get('tbl_pebayaran');
		$respon = array(
			'msg' => 'data sudah dipesan silahkan lakukan pembayaran',
			'err' => null,
		);
	header('Content-Type: application/json');
	echo json_encode($respon);


	}


	public function keranjang_by_pembeli() {

		$id_checkout = $this->input->get('id_user');


		$this->db->select('*');
		$this->db->from('tbl_checkout as cek');
		$this->db->join('tbl_produk as produk','produk.id_produk=cek.id_produk');
		$this->db->join('tbl_user pembeli', 'pembeli.id_user=cek.id_user');
		$this->db->where('cek.id_user', $id_checkout);
			$respon = array( 
				'msg' 	=> 'get tabel',
					'data' 	=> $this->db->get()->result(),
					'err' 	=> null,
				);
	
	// header('Content-Type: application/json');
	echo json_encode($respon);
	}
}
