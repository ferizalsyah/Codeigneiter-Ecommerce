<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bank  extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_bank');
		$this->load->helper('url');

	}

	public function index()
	{
		$isi['content']		= 'admin/bank/bank_content.php';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Data Barang';
		$isi['data']		= $this->db->get('bank');
		$this->load->view('admin/index',$isi);
	}

	public function tambah()
	{
		$isi['content']		= 'admin/bank/bank_add';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Tambah data barang';
		$isi['kt']			= $this->Model_bank->get_ktgori();
		$isi['data']		= $this->Model_bank->get_ktgori('bank');
		$this->load->view('admin/index',$isi);
	}

	public function update($id_bank)
	{
		$isi['content']		= 'admin/bank/bank_update';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Update data barang';
		$where 				= array('id_bank' => $id_bank);
		$isi['kt']			= $this->Model_bank->get_ktgori();
		$isi['barang']		= $this->Model_bank->edit_data($where,'bank')->result();
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
		$id_bank    		= $this->input->post('id_bank');
		$no_rek 	   		= $this->input->post('no_rek');
		$nama_bank	 		= $this->input->post('nama_bank');

		$data = array(
			'id_bank' 		=> $id_bank,
			'no_rek' 		=> $no_rek,
			'nama_bank'		=> $nama_bank
			);

		$this->Model_bank->input_data($data,'bank');
		?>
		
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("tambah data berhasil."); window.location.href="<?php echo base_url();?>index.php/admin/bank/bank"</script> <?php
	}

	public function hapus($id_bank)
	{
		$where = array('id_bank' => $id_bank);
		// $sql = $this->db->get_where("bank", $where)->result();
		// foreach ($sql as $value) {
			// unlink('./assets/dist/img/'.$value->foto);	
		
		$this->Model_bank->hapus_data($where,'bank');

		?> <script type="text/javascript">alert("delete data kirim berhasil."); window.location.href="<?php echo base_url();?>/admin/bank/bank"</script> 
		<?php


	}

	public function edit(){
		$id_bank 			= $this->input->post('id');
		$no_rek				= $this->input->post('no_rek');
		$nama_bank			= $this->input->post('nama_bank');

		// if(!empty($_FILES['foto']['name'])) {
		// 	// hapus foto lawas dan ganti dengan foto baru
		// 	@unlink('./assets/dist/img/'.$this->input->post('foto_old'));
		// 	$foto 				= $this->uploadFile('gif|jpg|png', 2048, $_FILES['foto']['name'],'foto');
		// } 


		$data = array(
			'id_bank' 		=> $id_bank,
			'no_rek' 		=> $no_rek,
			'nama_bank'		=> $nama_bank
		);
		$where = array(
			'id_bank' 		=> $id_bank
		);

		$this->Model_bank->update_data($where,$data,'bank');
		?>
	   		<script type="text/javascript">alert("Update data bank berhasil."); window.location.href="<?php echo base_url();?>/admin/bank/bank"</script> <?php
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */