<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
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
    // set text error
    $this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');

    // jika validasi gagal
    if ($this->form_validation->run('pengaturan') == FALSE) {
      $parsing['title'] = TITLE . ' | Admin-Pengaturan';
      $parsing['toko']  = $this->m_toko->find();
      $this->load->view('admin/v_pengaturan', $parsing);
    }

    // jika validasi berhasil
    else {
      // jika input gambar kosong
      if (empty($_FILES['gambar']['name'])) {
        $gambar = $this->input->post('gambar_lama', TRUE);
      }
      // jika inputan gambar tidak kosong
      else {
        // select data
        $logo = $this->m_toko->find();
        // hapus file 
        unlink('./asset/logo/' . $logo['logo_tk']);
        // upload file baru
        $gambar = $this->_upload_image();
      }

      $data = array(
        'nama_tk'   => ucwords($this->input->post('nama', TRUE)),
        'sejak_tk'  => $this->input->post('sejak', TRUE),
        'logo_tk'   => $gambar,
        'tlp_tk'    => $this->input->post('telepon', TRUE),
        'email_tk'  => $this->input->post('email', TRUE),
        'almt_tk'   => $this->input->post('alamat', TRUE),
        'fb_tk'     => $this->input->post('fb', TRUE),
        'ig_tk'     => $this->input->post('ig', TRUE),
        'wa_tk'     => $this->input->post('wa', TRUE),
        'tema_tk'   => $this->input->post('tema', TRUE),
      );
      $this->m_toko->update($data);

      $this->session->set_flashdata('notif', '<div class="alert alert-dark text-center">Selamat! Pengaturan Toko Anda Berhasil Diproses.</div>');
      redirect(site_url('admin/pengaturan'));
    }
  }

  /**
   * function membuat upload image yang hanya dapat diakses di dalam class ini
   * dan terdapat fitur untuk compress ukuran pixel gambar
   *  */
  private function _upload_image()
  {
    $config['upload_path']          = './asset/logo';
    $config['allowed_types']        = 'jpg|jpeg|png';
    $config['encrypt_name']         = TRUE;
    $config['detect_mime']          = TRUE;
    $config['max_size']             = 1024;

    $this->load->library('upload', $config);

    // jika gambar berhasil diupload
    if ($this->upload->do_upload('gambar')) {
      return $this->upload->data("file_name");
    } else {
      redirect(site_url('admin/pengaturan'));
    }
  }
}

/* End of file Pengaturan.php */
