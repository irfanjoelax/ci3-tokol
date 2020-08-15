<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
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
    $parsing['title'] = TITLE . ' | Admin-Produk';
    $parsing['toko']  = $this->m_toko->find();
    $parsing['produk']  = $this->m_produk->findAll();
    $this->load->view('admin/produk/v_index', $parsing);
  }

  public function tambah()
  {
    // set text error
    $this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');

    // jika validasi gagal
    if ($this->form_validation->run('admin_produk') == FALSE) {
      $parsing['title'] = TITLE . ' | Admin-Produk';
      $parsing['toko']  = $this->m_toko->find();
      $parsing['kategori']  = $this->m_kategori->findAll();
      $this->load->view('admin/produk/v_tambah', $parsing);
    }

    // jika validasi berhasil
    else {
      // jika input gambar kosong
      if (empty($_FILES['gambar']['name'])) {
        $gambar = 'box.png';
      } else {
        $gambar = $this->_upload_image();
      }

      $data = array(
        'nm_prd'    => ucwords($this->input->post('nama', TRUE)),
        'slug_prd'  => url_title($this->input->post('nama'), '-', TRUE),
        'ktg_id'    => $this->input->post('kategori', TRUE),
        'foto_prd'  => $gambar,
        'hrg_prd'   => $this->input->post('harga', TRUE),
        'disk_prd'  => $this->input->post('diskon', TRUE),
        'stok_prd'  => $this->input->post('stok', TRUE),
        'brt_prd'   => $this->input->post('berat', TRUE),
        'desc_prd'  => $this->input->post('deskripsi', TRUE),
      );
      $this->m_produk->save($data);

      $this->session->set_flashdata('notif', '<div class="alert alert-dark text-center">Selamat! Produk berhasil ditambahkan.</div>');
      redirect(site_url('admin/produk'));
    }
  }

  public function detail($slug)
  {
    $parsing['title'] = TITLE . ' | Admin-Produk';
    $parsing['toko']  = $this->m_toko->find();
    $parsing['produk']  = $this->m_produk->find($slug, 'slug');
    $this->load->view('admin/produk/v_detail', $parsing);
  }

  public function ubah($slug)
  {
    // set text error
    $this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');

    // jika validasi gagal
    if ($this->form_validation->run('admin_produk') == FALSE) {
      $parsing['title'] = TITLE . ' | Admin-Produk';
      $parsing['toko']  = $this->m_toko->find();
      $parsing['kategori']  = $this->m_kategori->findAll();
      $parsing['produk']  = $this->m_produk->find($slug, 'slug');
      $this->load->view('admin/produk/v_ubah', $parsing);
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
        $Produk = $this->m_produk->find($slug, 'slug');
        // hapus file 
        if ($Produk['foto_prd'] != 'box.png') {
          unlink('./asset/Produk/' . $Produk['foto_prd']);
        }
        $gambar = $this->_upload_image();
      }

      $data = array(
        'nm_prd'    => ucwords($this->input->post('nama', TRUE)),
        'slug_prd'  => url_title($this->input->post('nama'), '-', TRUE),
        'ktg_id'    => $this->input->post('kategori', TRUE),
        'foto_prd'  => $gambar,
        'hrg_prd'   => $this->input->post('harga', TRUE),
        'disk_prd'  => $this->input->post('diskon', TRUE),
        'stok_prd'  => $this->input->post('stok', TRUE),
        'brt_prd'   => $this->input->post('berat', TRUE),
        'desc_prd'  => $this->input->post('deskripsi', TRUE),
      );
      $this->m_produk->update($slug, 'slug', $data);

      $this->session->set_flashdata('notif', '<div class="alert alert-dark text-center">Selamat! Produk berhasil ditambahkan.</div>');
      redirect(site_url('admin/produk'));
    }
  }

  public function hapus($slug)
  {
    // select data
    $Produk = $this->m_produk->find($slug, 'slug');
    // hapus file 
    if ($Produk['foto_prd'] != 'box.png') {
      unlink('./asset/produk/' . $Produk['foto_prd']);
    }

    // hapus data dari database
    $this->m_produk->delete($slug, 'slug');
    $this->session->set_flashdata('notif', '<div class="alert alert-dark text-center">Selamat! Produk berhasil dihapus.</div>');
    redirect(site_url('admin/produk'));
  }

  /**
   * function membuat upload image yang hanya dapat diakses di dalam class ini
   * dan terdapat fitur untuk compress ukuran pixel gambar
   *  */
  private function _upload_image()
  {
    $config['upload_path']          = './asset/produk';
    $config['allowed_types']        = 'jpg|jpeg|png';
    $config['encrypt_name']         = TRUE;
    $config['detect_mime']          = TRUE;
    $config['max_size']             = 1024;

    $this->load->library('upload', $config);

    // jika gambar berhasil diupload
    if ($this->upload->do_upload('gambar')) {
      return $this->upload->data("file_name");
    } else {
      redirect(site_url('admin/produk/tambah'));
    }
  }
}
