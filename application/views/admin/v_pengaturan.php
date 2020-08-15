<?php $this->load->view('admin/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-3">
      <?php $this->load->view('admin/layouts/_menu') ?>
    </div>
    <div class="col-9">
      <h4>
        Halaman Pengaturan
      </h4>
      <hr class="bg-<?= $toko['tema_tk'] ?>">
      <!-- notif -->
      <?= $this->session->flashdata('notif') ?>
      <!-- end notif -->
      <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="gambar_lama" value="<?= $toko['logo_tk']; ?>">
        <div class="form-group row">
          <div class="col-10">
            <label for="nama">Nama Toko:</label>
            <input type="text" class="form-control" name="nama" value="<?= $toko['nama_tk']; ?>">
            <?= form_error('nama'); ?>
          </div>
          <div class="col-2">
            <label for="sejak">Sejak:</label>
            <input type="text" class="form-control" name="sejak" value="<?= $toko['sejak_tk']; ?>">
            <?= form_error('sejak'); ?>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="telepon">Telepon:</label>
            <input type="text" class="form-control" name="telepon" value="<?= $toko['tlp_tk']; ?>">
            <?= form_error('telepon'); ?>
          </div>
          <div class="col-sm-4">
            <label for="wa">Whatsapp:</label>
            <input type="text" class="form-control" name="wa" value="<?= $toko['wa_tk']; ?>">
            <?= form_error('wa'); ?>
          </div>
          <div class="col-sm-4">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" value="<?= $toko['email_tk']; ?>">
            <?= form_error('email'); ?>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="fb">Facebook:</label>
            <input type="text" class="form-control" name="fb" value="<?= $toko['fb_tk']; ?>">
            <?= form_error('fb'); ?>
          </div>
          <div class="col-sm-4">
            <label for="ig">Instagram:</label>
            <input type="text" class="form-control" name="ig" value="<?= $toko['ig_tk']; ?>">
            <?= form_error('ig'); ?>
          </div>
          <div class="col-sm-4">
            <label for="tema">Tema:</label>
            <select class="custom-select" name="tema">
              <option value="primary" <?= ($toko['tema_tk'] == 'primary') ? 'selected' : ''; ?>>Primary</option>
              <option value="success" <?= ($toko['tema_tk'] == 'success') ? 'selected' : ''; ?>>Success</option>
              <option value="warning" <?= ($toko['tema_tk'] == 'warning') ? 'selected' : ''; ?>>Warning</option>
              <option value="danger" <?= ($toko['tema_tk'] == 'danger') ? 'selected' : ''; ?>>Danger</option>
              <option value="info" <?= ($toko['tema_tk'] == 'info') ? 'selected' : ''; ?>>Info</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <textarea class="form-control" name="alamat" rows="2"><?= $toko['almt_tk']; ?></textarea>
        </div>
        <div class="form-group row">
          <div class="col-sm-3">
            <img src="<?= base_url('asset/logo/' . $toko['logo_tk']); ?>" class="img-thumbnail img-preview">
          </div>
          <div class="col-sm-9">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="gambar" id="gambar" onchange="imgPreview()">
              <label class="custom-file-label" for="gambar">Silakan pilih logo toko..</label>
              <small class="form-text text-muted pl-1">
                Logo berukuran maksimal 1 Mb
              </small>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-<?= $toko['tema_tk'] ?>">Simpan</button>
        <a href="<?= site_url('admin/toko'); ?>" class="btn btn-secondary">Batal/Kembali</a>
      </form>
    </div>
  </div>
</div>

<?php $this->load->view('admin/layouts/footer') ?>
</body>

</html>