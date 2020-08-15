<?php $this->load->view('admin/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-3">
      <?php $this->load->view('admin/layouts/_menu') ?>
    </div>
    <div class="col-9">
      <h4>
        Detail Kategori
        <div class="float-right"><a href="<?= site_url('admin/kategori'); ?>" class="btn btn-sm btn-dark">Kembali</a></div>
      </h4>
      <hr class="bg-<?= $toko['tema_tk'] ?>">
      <div class="card shadow">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?= base_url('asset/kategori/' . $kategori['foto_ktg']); ?>" class="card-img">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title"><?= $kategori['nama_ktg']; ?></h3>
              <p class="card-text"><?= $kategori['slug_ktg']; ?></p>
              <div class="mt-5">
                <a href="<?= site_url('admin/kategori/ubah/' . $kategori['slug_ktg']); ?>" class="btn btn-<?= $toko['tema_tk'] ?>">Ubah</a>
                <a href="<?= site_url('admin/kategori/hapus/' . $kategori['slug_ktg']); ?>" class="btn btn-secondary">Hapus</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('admin/layouts/footer') ?>
</body>

</html>