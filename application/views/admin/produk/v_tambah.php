<?php $this->load->view('admin/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-3">
      <?php $this->load->view('admin/layouts/_menu') ?>
    </div>
    <div class="col-9">
      <h4>
        Tambah Produk
      </h4>
      <hr class="bg-<?= $toko['tema_tk'] ?>">
      <div class="row">
        <div class="col-11">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nama">Nama Produk:</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukkan nama produk.." value="<?= set_value('nama'); ?>" autofocus>
              <?= form_error('nama'); ?>
            </div>
            <div class="form-group row">
              <div class="col-7">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="kategori">Kategori:</label>
                  </div>
                  <select class="custom-select" name="kategori">
                    <option selected>Pilih kategori produk..</option>
                    <?php foreach ($kategori as $k) : ?>
                      <option value="<?= $k['id_ktg']; ?>" <?= set_select('kategori', $k['id_ktg']); ?>><?= $k['nama_ktg']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-3">
                <label for="nama">Harga:</label>
                <input type="text" class="form-control" name="harga" placeholder="0" value="<?= set_value('harga'); ?>">
                <?= form_error('harga'); ?>
              </div>
              <div class="col-sm-3">
                <label for="diskon">Diskon:</label>
                <input type="text" class="form-control" name="diskon" placeholder="0" value="<?= set_value('diskon'); ?>">
                <?= form_error('diskon'); ?>
              </div>
              <div class="col-sm-3">
                <label for="stok">Stok:</label>
                <input type="text" class="form-control" name="stok" placeholder="0" value="<?= set_value('stok'); ?>">
                <?= form_error('stok'); ?>
              </div>
              <div class="col-sm-3">
                <label for="berat">Berat:</label>
                <input type="text" class="form-control" name="berat" placeholder="0" value="<?= set_value('berat'); ?>">
                <?= form_error('berat'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-3">
                <img src="<?= base_url('asset/produk/box.png'); ?>" class="img-thumbnail img-preview">
              </div>
              <div class="col-sm-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="gambar" id="gambar" onchange="imgPreview()">
                  <label class="custom-file-label" for="gambar">Silakan pilih foto produk..</label>
                  <small class="form-text text-muted pl-1">
                    Foto harus berukuran maksimal 1 Mb
                  </small>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="deskripsi">Deksripsi Produk:</label>
              <textarea name="deskripsi" id="summernote" class="form-control"></textarea>
              <?= form_error('deskripsi'); ?>
            </div>
            <button type="submit" class="btn btn-<?= $toko['tema_tk'] ?>">Simpan</button>
            <a href="<?= site_url('admin/produk'); ?>" class="btn btn-secondary">Batal/Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('admin/layouts/footer') ?>
</body>

</html>