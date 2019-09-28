<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
	
    public function authLogin($username, $pass) {
        $query = array(
            'email' => $username,
            'password' => $pass,
            'level_user' => 2,
        );

        $this->db->select('*')->from('tbl_user');
        $this->db->where($query);
        return $this->db->get();

    }


    public function registerUser($body) {
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */