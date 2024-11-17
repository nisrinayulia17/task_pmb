<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('authorized');
    }

    public function index()
    {
        $this->load->view('v_haldep');
    }

    public function syarat()
    {

        $this->load->view('v_syarat');
    }

    public function login()
    {

        $this->load->view('v_login');
    }

    public function proses_masuk()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->authorized->login_user($username, $password)) {
            redirect('crud/profil/' . $this->session->id);
        } else {
            $this->session->set_flashdata('error', 'Username atau Password Salah');
            redirect('auth/login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
