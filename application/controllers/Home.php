<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Servis_model');
        $this->load->Library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('cs/index');
    }

    public function lap_service()
    {
        $data['pendapatan_service'] = $this->Servis_model->lihatDataServis();
        $this->load->view('cs/lap_servis', $data);
    }

    public function laporan_pdf()
    {
        $this->load->library('dompdf_gen');
        $data['pendapatan_service'] = $this->Servis_model->lihatDataServis();
        $this->load->view('cs/laporan_pdf', $data);
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan Servis.pdf", array('Attachment' => 0));
    }
}
