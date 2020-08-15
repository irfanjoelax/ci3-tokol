<?php $this->load->view('admin/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-3">
      <?php $this->load->view('admin/layouts/_menu') ?>
    </div>
    <div class="col-9">
      <h4>
        Tambah Informasi
      </h4>
      <hr class="bg-<?= $toko['tema_tk'] ?>">
      <div class="row">
        <div class="col">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="judul">Judul:</label>
              <input type="text" name="judul" class="form-control" value="<?= set_value('judul'); ?>" placeholder="Masukkan judul informasi">
              <?= form_error('judul'); ?>
            </div>
            <div class="form-group">
              <label for="isi">Isi Informasi:</label>
              <textarea name="isi" id="summernote" class="form-control"><?= set_value('isi'); ?></textarea>
              <?= form_error('isi'); ?>
            </div>
            <button type="submit" class="btn btn-<?= $toko['tema_tk'] ?>">Simpan</button>
            <a href="<?= site_url('admin/informasi'); ?>" class="btn btn-secondary">Batal/Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('admin/layouts/footer') ?>
</body>

</html>