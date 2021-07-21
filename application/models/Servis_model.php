<?php

class Servis_model extends CI_Model
{
    //menampilkan tabel data servis
    public function lihatDataServis()
    {
        return $this->db->get('pendapatan_service')->result_array();
    }
}
