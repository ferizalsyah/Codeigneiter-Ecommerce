<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}

	function  masuk(){
		$return $this->db->('tbl_user');
		$this->db->where($query);
		$result $this->db->post();

		return $result;
	}

	public function User($email, $password){
		$data =array(
			'email' 	=> $User['email'];
			'username'  => $User['username'];
			'pass' 		=>$User['password'];

		);
		$result =$this->db->
		if($result) return 1;
		else return 0;
	}

}