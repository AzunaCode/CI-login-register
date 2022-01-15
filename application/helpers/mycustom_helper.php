<?php

function iislogin()
{
    $ci = get_instance();
    if ($ci->session->userdata('username')) {
        redirect('home', 'refresh');
    }
}
function cekadmin()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        $ci->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Anda harus login !</div>');
        redirect('', 'refresh');
    }
}

function getUser($user)
{
    if ($user == 'home') {
        return 'home';
    }
}
