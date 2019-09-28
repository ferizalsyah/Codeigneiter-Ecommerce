	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member  extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Model_member');
		$this->load->helper('url');

	}


	public function index()
	{
		$isi['content']		= 'admin/member/member_content.php';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Data Barang';
		$isi['data']		= $this->db->get('tbl_user');
		$this->load->view('admin/index',$isi);
	}

	public function tambah()
	{
		$isi['content']		= 'admin/member/member_add';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Tambah data barang';
		$isi['kt']			= $this->Model_member->get_ktgori();
		$isi['data']		= $this->Model_member->get_ktgori1('tbl_user');
		$this->load->view('admin/index',$isi);
	}

	public function update($id_user)
	{
		$isi['content']		= 'admin/member/member_update';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Update data barang';
		$where 				= array('id_user' => $id_user);
		$isi['kt']			= $this->Model_member->get_ktgori();
		$isi['barang']		= $this->Model_member->edit_data($where,'tbl_user')->result();
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
		$id_nomor    		= $this->input->post('id_nomor');
		$kategori    		= $this->input->post('kategori');
		$foto 				= $this->uploadFile('gif|jpg|png', 2048, $_FILES['foto']['name'], 'foto'); 

		$data = array(
			'id_nomor' 			=> $id_nomor,
			'kategori' 			=> $kategori,
			'foto'				=> $foto
			);

		$this->Model_kategori->input_data($data,'tbl_kategori');
		?>
		
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("tambah data berhasil."); window.location.href="<?php echo base_url();?>index.php/admin/kategori/kategori"</script> <?php
	}

	public function hapus($id_user)
	{
		$where = array('id_user' => $id_user);
		$sql = $this->db->get_where("tbl_user_pembeli", $where)->result();
		foreach ($sql as $value) {
			unlink('./assets/dist/img/'.$value->foto);	
		}
		$this->Model_member->hapus_data($where,'tbl_user_pembeli');

		?> <script type="text/javascript">alert("delete data kategori berhasil."); window.location.href="<?php echo base_url();?>/admin/member/member"</script> 
		<?php


	}

	public function edit(){
		$id_nomor 			= $this->input->post('id_nomor');
		$kategori 			= $this->input->post('kategori');
		$foto				= $this->input->post('foto');

		if(!empty($_FILES['foto']['name'])) {
			// hapus foto lawas dan ganti dengan foto baru
			@unlink('./assets/dist/img/'.$this->input->post('foto_old'));
			$foto 				= $this->uploadFile('gif|jpg|png', 2048, $_FILES['foto']['name'],'foto');
		} else {

			$foto 				= $this->input->post('foto_old');
		}


		$data = array(
			'id_nomor' 			=> $id_nomor,
			'kategori' 			=> $kategori,
			'foto'				=> $foto
		);
		$where = array(
			'id_nomor' => $id_nomor
		);

		$this->Model_kategori->update_data($where,$data,'tbl_kategori');
		?>
	   		<script type="text/javascript">alert("Update data kategori berhasil."); window.location.href="<?php echo base_url();?>/admin/kategori/kategori"</script> <?php
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */