<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Produk_model');
		$this->load->helper('url');
		$this->load->library('session');
	}


	public function index()
	{
		$isi['content']		= 'admin/produk/produk_content';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Data Barang';
		$isi['data']		= $this->db->get('tbl_produk');
		$this->load->view('admin/index',$isi);
	}

	public function tambah()
	{
		$isi['content']		= 'admin/produk/produk_add';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Tambah data barang';
		$isi['kt']			= $this->Produk_model->get_ktgori()->result();
		$this->load->view('admin/index',$isi);
	}

	public function update($id_produk)
	{
		$isi['content']		= 'admin/produk/produk_update';
		$isi['judul']		= 'Manajemen data';
		$isi['sub_judul']	= 'Update data barang';
		$where 				= array('id_produk' => $id_produk);
		$isi['kt']			= $this->Produk_model->get_ktgori()->result();
		$isi['barang']		= $this->Produk_model->edit_data($where,'tbl_produk')->result();
		$this->load->view('admin/index',$isi);
	}

	private function uploadFile($typeFile, $maxSize, $name, $formName) {
		$config['upload_path'] 			= './assets/dist/img/';
		$config['allowed_types']        = $typeFile;
		$config['max_size']             = $maxSize;

		/* load library upload file */
		$this->load->library('upload', $config);
		if($this->upload->do_upload($formName)) {
			return $name;
		} else {
			echo $this->upload->display_errors();
		}

	}

	public function simpan()
	{
		$nama_produk		= $this->input->post('nama_produk');
		$harga				= $this->input->post('harga');
		$tanggal_input		= $this->input->post('Tanggal_input');
		$jumlah_produk 		= $this->input->post('jumlah_produk');
		$deskripsi			= $this->input->post('deskripsi');
		$foto	 			= $this->uploadFile('gif|jpg|png', 2048, $_FILES['foto']['name'], 'foto'); 
		$kategori 			= $this->input->post('kategori');
		$id_user			= $this->session->id_user;
		$data = array(
			'nama_produk'	=> $nama_produk,
			'harga'			=> $harga,
			'tanggal_input'	=> $tanggal_input,
			'jumlah_produk'	=> $jumlah_produk,
			'deskripsi'		=> $deskripsi,
			'foto'			=> $foto,
			'id_user'		=> $id_user,
			'id_kategori'   => $kategori

			);

		$this->Produk_model->input_data($data,'tbl_produk');
		// $query = $this->db->get_where('tbl_produk', array('id' =>'tbl_produk'));
		?>
			<!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("tambah data berhasil."); window.location.href="<?php echo base_url();?>index.php/admin/produk/produk"</script> <?php
	}

	public function hapus($id_produk)
	{
		$where = array('id_produk' => $id_produk);
		$sql = $this->db->query("select * from tbl_produk where id_produk='$id_produk	'")->result();
		// $sql = $this->db->get_where('tbl_produk', array('id' =>'$id_produk'), $limit);
		foreach ($sql as $value) {
			unlink('./assets/dist/img/'.$value->foto);	
		}
		$this->Produk_model->hapus_data($where,'tbl_produk');

		?> <script type="text/javascript">alert("delete data produk berhasil."); window.location.href="<?php echo base_url();?>/admin/produk/produk"</script> 
		<?php


	}

	public function edit(){
		$id_produk 			= $this->input->post('id_produk');
		$nama_produk 		= $this->input->post('nama_produk');
		$harga				= $this->input->post('harga');
		$Tanggal_input		= $this->input->post('Tanggal_input');
		$jumlah_produk		= $this->input->post('jumlah_produk');
		$deskripsi 			= $this->input->post('deskripsi');

		if(!empty($_FILES['foto']['name'])) {
			// hapus foto lawas dan ganti dengan foto baru
			@unlink('./assets/dist/img/'.$this->input->post('foto'));
			$foto 				= $this->uploadFile('gif|jpg|png', 2048, $_FILES['foto']['name'],'foto');
		} else {

			$foto 				= $this->input->post('foto');
		}


		$data = array(
			'id_produk' 			=> $id_produk,
			'nama_produk'			=> $nama_produk,
			'harga'			        => $harga,
			'Tanggal_input'			=> $Tanggal_input,
			'jumlah_produk'			=> $jumlah_produk,
			'deskripsi'				=> $deskripsi,
			'foto'					=> $foto
		);
		$where = array(
			'id_produk' => $id_produk
		);

		$this->Produk_model->update_data($where,$data,'tbl_produk');
		?>
	   		<script type="text/javascript">alert("Update data produk berhasil."); window.location.href="<?php echo base_url();?>/admin/produk/produk"</script> <?php
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */