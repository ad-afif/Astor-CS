<?php

class Sparepart_model extends CI_Model
{
    //menampilkan tabel data sparepart
    public function lihatDataSparepart()
    {
        return $this->db->get('pemesanan_sparepart')->result_array();
    }
}
