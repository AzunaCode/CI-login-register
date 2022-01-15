<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		iislogin();
		$this->load->view('v_login');
	}

	public function login()
	{
		$user = 'admin@rumahweb.co.id';
		$pass = 'admin123';

		$password = $this->input->post('password');
		$username = $this->input->post('username');

		if ($username == $user) {
			if ($password == $pass) {
				$this->session->set_userdata('username', $username);
				redirect('home', 'refresh');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Anda berhasil logout !</div>');
		redirect('welcome');
	}
}
