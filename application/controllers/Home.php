<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            echo "halaman kosong";
        } else {
            $this->load->view('v_dashboard');
        }
    }
}
