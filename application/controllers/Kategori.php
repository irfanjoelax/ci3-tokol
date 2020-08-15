<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
  public function index()
  {
    $parsing['title'] = TITLE . ' | Kategori';
    $parsing['toko']  = $this->m_toko->find();
    $this->load->view('web/v_kategori', $parsing);
  }
}
