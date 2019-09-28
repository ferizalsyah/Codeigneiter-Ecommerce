<?php 
class Login_model extends CI_Model{
 
	public function __construct(){
		parent::__construct();	
	}
 
	public function check_user($username, $password) {
		$where = $this->db->select('*')->from('tbl_user')->where(array('username' => $username, 'password' => $password));
		return $this->db->get();
		
	}
}