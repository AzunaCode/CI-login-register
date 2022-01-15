<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        iislogin();
        $this->load->view('v_register');
    }

    public function create_account()
    {
        $b = $this->input->post('birthday');
        $tanggal_lahir = new DateTime($b);
        $sekarang = new DateTime("today");
        $unixTimeSaatIni = time();
        $unixTimeTahunLahir = strtotime($b);
        $unixTimeDalamSetahun = 31536000;
        $hitungUsia = ($unixTimeSaatIni - $unixTimeTahunLahir) / $unixTimeDalamSetahun;
        // echo (int)$hitungUsia;

        $fullname = $this->input->post('fullname');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $rumah = $this->input->post('rumah');
        $username = $email . $rumah;
        $umur = (int)$hitungUsia;


        if ($tanggal_lahir > $sekarang) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Inputan salah! Diulangi lagi</div>');
        } elseif ((int)$hitungUsia < 17) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Umur anda kurang dari 17 tahun!Mohon maaf anda tidak bisa daftar.</div>');
        }

        if ($this->input->post()) {
            $this->load->library('form_validation');
            $rules = array(
                [
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'callback_valid_password',
                ],
                [
                    'field' => 'confirm_password',
                    'label' => 'Confirm Password',
                    'rules' => 'matches[password]',
                ]
            );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run()) {
                // // echo 'Success! Account can be created.';
                // $password = $this->input->post('password');
                // $username = $this->input->post('username');
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('umur', $umur);
                $this->session->set_userdata('fullname', $fullname);
                $this->session->set_userdata('password', $password);
                $this->session->set_userdata('tanggal_lahir', $b);
                redirect('home', 'refresh');
            } else {
                echo 'Error <ul>' . validation_errors('<li>', '</li>') . '</ul>';
            }
        }
    }
    public function valid_password($password = '')
    {
        $password = trim($password);
        $regex_lowercase = '/[a-z]/';
        $regex_uppercase = '/[A-Z]/';
        $regex_number = '/[0-9]/';
        $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';

        if (empty($password)) {
            $this->form_validation->set_message('valid_password', 'The {field} field is required.');

            return FALSE;
        }

        if (preg_match_all($regex_lowercase, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');

            return FALSE;
        }

        if (preg_match_all($regex_uppercase, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');

            return FALSE;
        }

        if (preg_match_all($regex_number, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');

            return FALSE;
        }

        if (preg_match_all($regex_special, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));

            return FALSE;
        }

        if (strlen($password) < 12) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least 12 characters in length.');

            return FALSE;
        }

        if (strlen($password) > 32) {
            $this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');

            return FALSE;
        }

        return TRUE;
    }
}
