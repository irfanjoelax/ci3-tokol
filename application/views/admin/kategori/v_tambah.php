<?php $this->load->view('admin/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-3">
      <?php $this->load->view('admin/layouts/_menu') ?>
    </div>
    <div class="col-9">
      <h4>
        Tambah Kategori
      </h4>
      <hr class="bg-<?= $toko['tema_tk'] ?>">
      <div class="row">
        <div class="col-8">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nama">Nama kategori:</label>
              <input type="text" class="form-control" name="nama" placeholder="masukkan nama kategori.." value="<?= set_value('nama'); ?>" autofocus>
              <?= form_error('nama'); ?>
            </div>
            <div class="form-group row">
              <div class="col-sm-3">
                <img src="<?= base_url('asset/kategori/default-ktg.png'); ?>" class="img-thumbnail img-preview">
              </div>
              <div class="col-sm-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="gambar" id="gambar" onchange="imgPreview()">
                  <label class="custom-file-label" for="gambar">Silakan pilih foto kategori..</label>
                  <small class="form-text text-muted pl-1">
                    Foto harus berukuran maksimal 1 Mb
                  </small>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-<?= $toko['tema_tk'] ?>">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('admin/layouts/footer') ?>
</body>

</html>