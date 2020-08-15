<?php $this->load->view('admin/layouts/header') ?>
<div class="container my-5">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <!-- alert notifikasi -->
      <?= $this->session->flashdata('notif') ?>
      <div class="card">
        <div class="card-header bg-<?= $toko['tema_tk']; ?> text-white">
          <h5>Halaman Autentikasi</h5>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>
              <div class="col-md-6">
                <input type="text" class="form-control " name="email" placeholder="masukkan email anda" value="<?= set_value('email'); ?>" autofocus>
                <?= form_error('email'); ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control " name="password" placeholder="masukkan password anda">
                <?= form_error('password'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">
                    Lihat Password
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-<?= $toko['tema_tk']; ?>">
                  Masuk
                </button>
                <a class="btn btn-secondary" href="#">
                  Lupa Password
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/layouts/footer') ?>