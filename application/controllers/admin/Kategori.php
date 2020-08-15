<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
    $parsing['title'] = TITLE . ' | Admin-Kategori';
    $parsing['toko']  = $this->m_toko->find();
    $parsing['kategori']  = $this->m_kategori->findAll();
    $this->load->view('admin/kategori/v_index', $parsing);
  }

  public function tambah()
  {
    // set text error
    $this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');

    // jika validasi gagal
    if ($this->form_validation->run('admin_kategori') == FALSE) {
      $parsing['title'] = TITLE . ' | Admin-Kategori';
      $parsing['toko']  = $this->m_toko->find();
      $this->load->view('admin/kategori/v_tambah', $parsing);
    }

    // jika validasi berhasil
    else {
      // jika input gambar kosong
      if (empty($_FILES['gambar']['name'])) {
        $gambar = 'default-ktg.png';
      } else {
        $gambar = $this->_upload_image();
      }

      $data = array(
        'nama_ktg' => ucwords($this->input->post('nama', TRUE)),
        'slug_ktg' => url_title($this->input->post('nama'), '-', TRUE),
        'foto_ktg' => $gambar
      );
      $this->m_kategori->save($data);

      $this->session->set_flashdata('notif', '<div class="alert alert-dark">Selamat! kategori berhasil ditambahkan.</div>');
      redirect(site_url('admin/kategori'));
    }
  }

  public function detail($slug)
  {
    $parsing['title'] = TITLE . ' | Admin-Kategori';
    $parsing['toko']  = $this->m_toko->find();
    $parsing['kategori']  = $this->m_kategori->find($slug, 'slug');
    $this->load->view('admin/kategori/v_detail', $parsing);
  }

  public function ubah($slug)
  {
    // set text error
    $this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');

    // jika validasi gagal
    if ($this->form_validation->run('admin_kategori') == FALSE) {
      $parsing['title'] = TITLE . ' | Admin-Kategori';
      $parsing['toko']  = $this->m_toko->find();
      $parsing['kategori']  = $this->m_kategori->find($slug, 'slug');
      $this->load->view('admin/kategori/v_ubah', $parsing);
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
        $kategori = $this->m_kategori->find($slug, 'slug');
        // hapus file 
        unlink('./asset/kategori/' . $kategori['foto_ktg']);
        $gambar = $this->_upload_image();
      }

      $data = array(
        'nama_ktg' => ucwords($this->input->post('nama', TRUE)),
        'slug_ktg' => url_title($this->input->post('nama'), '-', TRUE),
        'foto_ktg' => $gambar
      );
      $this->m_kategori->update($slug, 'slug', $data);

      $this->session->set_flashdata('notif', '<div class="alert alert-dark">Selamat! kategori berhasil ditambahkan.</div>');
      redirect(site_url('admin/kategori'));
    }
  }

  public function hapus($slug)
  {
    // select data
    $kategori = $this->m_kategori->find($slug, 'slug');
    // hapus file 
    unlink('./asset/kategori/' . $kategori['foto_ktg']);

    // hapus data dari database
    $this->m_kategori->delete($slug, 'slug');
    $this->session->set_flashdata('notif', '<div class="alert alert-dark">Selamat! kategori berhasil dihapus.</div>');
    redirect(site_url('admin/kategori'));
  }

  /**
   * function membuat upload image yang hanya dapat diakses di dalam class ini
   * dan terdapat fitur untuk compress ukuran pixel gambar
   *  */
  private function _upload_image()
  {
    $config['upload_path']          = './asset/kategori';
    $config['allowed_types']        = 'jpg|jpeg|png';
    $config['encrypt_name']         = TRUE;
    $config['detect_mime']          = TRUE;
    $config['max_size']             = 1024;

    $this->load->library('upload', $config);

    // jika gambar berhasil diupload
    if ($this->upload->do_upload('gambar')) {
      return $this->upload->data("file_name");
    } else {
      redirect(site_url('admin/kategori/tambah'));
    }
  }
}
