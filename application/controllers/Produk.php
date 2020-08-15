<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
  public function index()
  {
    $parsing['title'] = TITLE . ' | Produk';
    $parsing['toko']  = $this->m_toko->find();
    $this->load->view('web/v_produk', $parsing);
  }

  public function detail()
  {
    $parsing['title'] = TITLE . ' | Produk Detail';
    $parsing['toko']  = $this->m_toko->find();
    $this->load->view('web/v_produk_detail', $parsing);
  }
}
