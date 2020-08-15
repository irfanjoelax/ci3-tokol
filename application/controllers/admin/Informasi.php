<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
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
    $parsing['title'] = TITLE . ' | Admin-Informasi';
    $parsing['toko']  = $this->m_toko->find();
    $parsing['informasi']  = $this->m_informasi->findAll();
    $this->load->view('admin/informasi/v_index', $parsing);
  }

  public function tambah()
  {
    // set text error
    $this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');

    // jika validasi gagal
    if ($this->form_validation->run('informasi') == FALSE) {
      $parsing['title'] = TITLE . ' | Admin-Informasi';
      $parsing['toko']  = $this->m_toko->find();
      $this->load->view('admin/informasi/v_tambah', $parsing);
    }

    // jika validasi berhasil
    else {
      $data = array(
        'jdl_inf' => ucwords($this->input->post('judul', TRUE)),
        'isi_inf' => $this->input->post('isi', TRUE),
      );
      $this->m_informasi->save($data);

      $this->session->set_flashdata('notif', '<div class="alert alert-dark">Selamat! Informasi berhasil ditambahkan.</div>');
      redirect(site_url('admin/informasi'));
    }
  }

  public function detail($id)
  {
    $parsing['title'] = TITLE . ' | Admin-Informasi';
    $parsing['toko']  = $this->m_toko->find();
    $parsing['informasi']  = $this->m_informasi->find($id);
    $this->load->view('admin/informasi/v_detail', $parsing);
  }

  public function ubah($id)
  {
    // set text error
    $this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');

    // jika validasi gagal
    if ($this->form_validation->run('informasi') == FALSE) {
      $parsing['title'] = TITLE . ' | Admin-Informasi';
      $parsing['toko']  = $this->m_toko->find();
      $parsing['informasi']  = $this->m_informasi->find($id);
      $this->load->view('admin/informasi/v_ubah', $parsing);
    }

    // jika validasi berhasil
    else {
      $data = array(
        'jdl_inf' => ucwords($this->input->post('judul', TRUE)),
        'isi_inf' => $this->input->post('isi', TRUE),
      );
      $this->m_informasi->update($id, $data);

      $this->session->set_flashdata('notif', '<div class="alert alert-dark">Selamat! Informasi berhasil ditambahkan.</div>');
      redirect(site_url('admin/informasi'));
    }
  }

  public function hapus($id)
  {
    // hapus data dari database
    $this->m_informasi->delete($id, 'slug');
    $this->session->set_flashdata('notif', '<div class="alert alert-dark text-center">Selamat! Informasi berhasil dihapus.</div>');
    redirect(site_url('admin/informasi'));
  }
}

/* End of file Informasi.php */
