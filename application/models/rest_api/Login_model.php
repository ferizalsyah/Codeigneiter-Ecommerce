<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
	public function __construct(){
		parent::__construct();	
	}

	function authLogin(){
		$return this->db->('tbl_user');
		$this->db->where($query	);
		$result =$this->db->get();

		return $result;	
	}

	public function registerUser($body){
		$data = array(
            'username'  => $body['username'],
            'email'     => $body['email'],
            'no'        => $body['no'],
            'alamat'    => $body['alamat']
        );	
        $result = $this->db->insert($data, 'tbl_user');
        if ($result) return 1;
        else return 0;
		}

	}
