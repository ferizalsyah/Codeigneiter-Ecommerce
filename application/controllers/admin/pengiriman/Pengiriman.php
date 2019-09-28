<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengiriman  extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_pengiriman');
		$this->load->helper('url');

	}

	public function index()
	{
		$isi['content']		= 'admin/pengiriman/pengiriman_content.php';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Data Barang';
		$isi['data']		= $this->db->get('alamat_pengiriman');
		$this->load->view('admin/index',$isi);
	}

	public function tambah()
	{
		$isi['content']		= 'admin/pengiriman/pengiriman_add';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Tambah data barang';
		$isi['kt']			= $this->Model_pengiriman->get_ktgori();
		$isi['data']		= $this->Model_pengiriman->get_ktgori('alamat_pengiriman');
		$this->load->view('admin/index',$isi);
	}

	public function update($id_alamat)
	{
		$isi['content']		= 'admin/pengiriman/pengiriman_update';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Update data barang';
		$where 				= array('id_alamat' => $id_alamat);
		$isi['kt']			= $this->Model_pengiriman->get_ktgori();
		$isi['barang']		= $this->Model_pengiriman->edit_data($where,'alamat_pengiriman')->result();
		$this->load->view('admin/index',$isi);
	}

	private function uploadFile($typeFile, $maxSize, $name, $formName) {
		$config['upload_path'] 			= './assets/dist/img/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['allowed_types']        = $typeFile;
		$config['max_size']             = $maxSize;

		/* load library upload file */
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload($formName)) {
			return $name;
		} else{
			$error = $this->upload->display_errors();
			die($error);
		}

	}

	public function simpan()
	{
		$id_alamat    		= $this->input->post('id_alamat');
		$ongkir 	   		= $this->input->post('ongkir');
		$kota	 			= $this->input->post('kota');

		$data = array(
			'id_alamat' 		=> $id_alamat,
			'ongkir' 			=> $ongkir,
			'kota'				=> $kota
			);

		$this->Model_pengiriman->input_data($data,'alamat_pengiriman');
		?>
		
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("tambah data berhasil."); window.location.href="<?php echo base_url();?>index.php/admin/pengiriman/pengiriman"</script> <?php
	}

	public function hapus($id_alamat)
	{
		$where = array('id_alamat' => $id_alamat);
		
		$this->Model_pengiriman->hapus_data($where,'alamat_pengiriman');

		?> <script type="text/javascript">alert("delete data kirim berhasil."); window.location.href="<?php echo base_url();?>/admin/pengiriman/pengiriman"</script> 
		<?php


	}

	public function edit(){
		$id_alamat 			= $this->input->post('id');
		$ongkir				= $this->input->post('ongkir');
		$kota				= $this->input->post('kota');

		// if(!empty($_FILES['foto']['name'])) {
		// 	// hapus foto lawas dan ganti dengan foto baru
		// 	@unlink('./assets/dist/img/'.$this->input->post('foto_old'));
		// 	$foto 				= $this->uploadFile('gif|jpg|png', 2048, $_FILES['foto']['name'],'foto');
		// } 


		$data = array(
			'ongkir' 			=> $ongkir,
			'kota'				=> $kota
		);
		$where = array(
			'id_alamat' => $id_alamat
		);

		$this->Model_pengiriman->update_data($where,$data,'alamat_pengiriman');
		?>
	   		<script type="text/javascript">alert("Update data pengiriman berhasil."); window.location.href="<?php echo base_url();?>/admin/pengiriman/pengiriman"</script> <?php
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */