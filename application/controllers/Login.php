<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		if ($this->session->userdata('username')) {
			$this->check($this->session->userdata('username'));
		}
	}
 
	public function index(){
		
		$this->load->view('login');
	}
 
	//function for processing login form
	public function login_process(){
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$result 	= $this->login_model->check_user($username, $password); 
		if($result->num_rows() > 0){
			$temp = $result->row();
			$id_user 			= $temp->id_user;
			$username 			= $temp->username;
			$level_user			= $temp->level_user;

			$newdata = array(
			        'id_user'  		=> $id_user,
			        'username' 		=> $username,
			        'level_user'	=> $level_user,
			        'logged_in' 	=> TRUE
			);
			$this->session->set_userdata($newdata);
			$this->check($this->session->userdata('level_user'));
		}else {
			?>
			<script type="text/javascript">alert("Maaf nama yang anda masukan tidak benar."); window.location.href="<?php echo base_url();?>index.php/login"</script> <?php
		}
	}

	public function check($sesion) {
		if($sesion == '1'){
			redirect('admin/admin');
		}elseif($this->session->userdata('level_user') == '2'){
			redirect('user/user');
		}
	}


	public function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}

	public function register() {
        $this->load->view('form.html');
    }
    
    
    public function registerprosess() {
        $data = array(
            'username'   => $this->input->post('firstName'),
            'password'   => md5($this->input->post('password')),
            'email'      => $this->input->post('email'),
            'no_hp'      => $this->input->post('nomor'),
            'gender'     => $this->input->post('gender'),
        );
        	
        $exsist = $this->db->get_where('tbl_user', array('email' => $data['email']))->num_rows();
        
        if($exsist > 0) {
            echo "<script>('email sudah pernah di registri')</script>";    
            echo "<script>window.location.href='".base_url('login/register')."'</script>";    
        } else {
            $this->db->insert('tbl_user', $data);
        
            ?>
            
            <h1>  <a href="intent://shoop/#Intent;scheme=shoppertanian;package=shoopertanian.com.shop;end"> lanjutkan pembelian</a></h1>
            <?php
        }
        
    }
}

