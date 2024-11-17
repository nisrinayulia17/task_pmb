<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUD extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->view('v_input');
    }

    public function aksi_tambah_biodata()
    {

        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $NIK = $this->input->post('NIK');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $agama = $this->input->post('agama');
        $nomor_hp = $this->input->post('nomor_hp');
        $nama_ayah = $this->input->post('nama_ayah');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $alamat_ortu = $this->input->post('alamat_ortu');
        $prodi_1 = $this->input->post('prodi_1');
        $prodi_2 = $this->input->post('prodi_2');
        $waktu_kuliah = $this->input->post('waktu_kuliah');
        $tahun_masuk = $this->input->post('tahun_masuk');
        $semester_awal = $this->input->post('semester_awal');


        $data = array(
            'email' => $email,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'nama_lengkap' => $nama_lengkap,
            'NIK' => $NIK,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'agama' => $agama,
            'nomor_hp' => $nomor_hp,
            'nama_ayah' => $nama_ayah,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'nama_ibu' => $nama_ibu,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'alamat_ortu' => $alamat_ortu,
            'prodi_1' => $prodi_1,
            'prodi_2' => $prodi_2,
            'waktu_kuliah' => $waktu_kuliah,
            'tahun_masuk' => $tahun_masuk,
            'semester_awal' => $semester_awal
        );
        $this->m_data->tambah_biodata($data, 'camaba');
        redirect('auth/login');
    }

    public function profil($id)
    {
        $where = array('id' => $id);
        $data['camaba'] = $this->m_data->tampil_biodata($where, 'camaba')->result();
        $this->load->view('v_profil', $data);
    }

    public function data_pendaftaran($id)
    {
        $where = array('id' => $id);
        $data['camaba'] = $this->m_data->tampil_pendaftaran($where, 'camaba')->result();
        $this->load->view('v_pendaftaran', $data);
    }

    public function edit_biodata($id)
    {
        $where = array('id' => $id);
        $data['camaba'] = $this->m_data->edit_biodata($where, 'camaba')->result();
        $this->load->view('v_edit_bio', $data);
    }

    public function update_bio()
    {
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $NIK = $this->input->post('NIK');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $agama = $this->input->post('agama');
        $nomor_hp = $this->input->post('nomor_hp');


        $data = array(
            'email' => $email,
            'username' => $username,
            'nama_lengkap' => $nama_lengkap,
            'NIK' => $NIK,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'agama' => $agama,
            'nomor_hp' => $nomor_hp

        );

        $where = array(
            'id' => $id
        );
        $this->m_data->update_biodata($where, $data, 'camaba');
        redirect('crud/profil/' . $this->session->id);
    }

    public function edit_data_pendaftaran($id)
    {
        $where = array('id' => $id);
        $data['camaba'] = $this->m_data->edit_pendaftaran($where, 'camaba')->result();
        $this->load->view('v_edit_pendaftaran', $data);
    }

    public function update_pendaftaran()
    {
        $id = $this->input->post('id');
        $nama_ayah = $this->input->post('nama_ayah');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $alamat_ortu = $this->input->post('alamat_ortu');


        $data = array(
            'nama_ayah' => $nama_ayah,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'nama_ibu' => $nama_ibu,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'alamat_ortu' => $alamat_ortu


        );

        $where = array(
            'id' => $id
        );
        $this->m_data->update_pendaftaran($where, $data, 'camaba');
        redirect('crud/data_pendaftaran/' . $this->session->id);
    }

    public function seleksi()
    {
        $this->load->view('v_seleksi');
    }
}
