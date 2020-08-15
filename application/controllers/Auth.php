<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function index()
  {
    // jika validasi gagal
    $this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');
    if ($this->form_validation->run('login') == FALSE) {
      $parsing['title'] = TITLE . ' | Masuk';
      $parsing['toko']  = $this->m_toko->find();
      $this->load->view('admin/v_login', $parsing);
    }

    // jika validasi berhasil
    else {
      $email = $this->input->post('email', TRUE);
      $password = $this->input->post('password', TRUE);

      $user = $this->m_user->getEmail($email);

      // cek bila user tersedia
      if ($user) {
        // cek apakah user sudah teraktifasi
        if ($user['aktif_usr'] == 1) {
          // cek apakah password benar
          if (password_verify($password, $user['pass_usr'])) {
            // pembuatan session login
            $session = array(
              'nim_mhs'   => $user['nim_mhs'],
              'fklt_id'   => $user['fklt_id'],
              'prd_id'    => $user['prd_id'],
              'nama_mhs'  => $user['nama_mhs'],
              'login'     => TRUE,
            );

            $this->session->set_userdata($session);
            redirect(site_url('admin/beranda'));
          }
          // bila password salah
          else {
            // tampilkan alert
            $this->session->set_flashdata('notif', '<div class="alert alert-dark">Oopss! password yang anda masukkan salah.</div>');
            redirect(site_url('auth'));
          }
        }
        // bila user belum teraktifasi
        else {
          // tampilkan alert
          $this->session->set_flashdata('notif', '<div class="alert alert-dark">Oopss! silakan cek email anda untuk aktifasi terlebih dahulu.</div>');
          redirect(site_url('auth'));
        }
      }
      // user tidak tersedia
      else {
        // tampilkan alert
        $this->session->set_flashdata('notif', '<div class="alert alert-dark">Oopss! User belum terdaftar pada sistem.</div>');
        redirect(site_url('auth'));
      }
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect(site_url('auth'));
  }

  public function generate_user()
  {
    $data = array(
      'nama_usr'  => 'Muhammad Irfan Permana',
      'email_usr' => 'irfanthejoelax@gmail.com',
      'pass_usr'  => password_hash('irfan020412', PASSWORD_DEFAULT),
      'aktif_usr' => 1
    );

    $user = $this->m_user->save($data);
    if ($user == false) {
      echo 'generate user gagal dilakukan';
    }

    echo 'generate user berhasil dilakukan';
  }
}

/* End of file Auth.php */
