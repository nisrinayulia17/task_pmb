<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authorized extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    function login_user($username, $password)
    {
        $query = $this->db->get_where('camaba', array('username' => $username));
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('id', $data_user->id);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('auth/login');
        }
    }
}
