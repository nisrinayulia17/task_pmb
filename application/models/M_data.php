<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    function tampil_biodata($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function tampil_pendaftaran($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function tambah_biodata($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_biodata($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_biodata($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function edit_pendaftaran($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_pendaftaran($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
