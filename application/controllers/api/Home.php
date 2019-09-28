<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('rest_api/kategori', 'kt');
		
	}

	public function geKategori() {
		$result = $this->kt->show_kategori()->result();


		$respon = array(
			'msg' 	=> 'data ditemukan',	
			'data' 	=> $result,
			'err' 	=> null
		);
		

		header('Content-Type:application/json');

		echo json_encode($respon);
	}
 }