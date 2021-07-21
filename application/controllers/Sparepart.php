<?php

class Sparepart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sparepart_model');
        $this->load->Library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('cs/index');
    }

    public function lap_sparepart()
    {
        $data['pemesanan_sparepart'] = $this->Sparepart_model->lihatDataSparepart();
        $this->load->view('cs/lap_sparepart', $data);
    }
}
