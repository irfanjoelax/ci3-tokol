<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Iklan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('login') == false) {
      redirect(site_url('auth'));
    }
  }

  public function index()
  {
    $parsing['title'] = TITLE . ' | Admin-Iklan';
    $parsing['toko']  = $this->m_toko->find();
    $this->load->view('admin/v_beranda', $parsing);
  }
}

/* End of file Iklan.php */
