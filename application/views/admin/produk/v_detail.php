<?php $this->load->view('admin/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-3">
      <?php $this->load->view('admin/layouts/_menu') ?>
    </div>
    <div class="col-9">
      <h4>
        Detail Produk
        <div class="float-right">
          <a href="<?= site_url('admin/produk/ubah/' . $produk['slug_prd']); ?>" class="btn btn-sm btn-<?= $toko['tema_tk'] ?>">Ubah</a>
          <a href="<?= site_url('admin/produk/hapus/' . $produk['slug_prd']); ?>" class="btn btn-sm btn-secondary">Hapus</a>
          <a href="<?= site_url('admin/produk'); ?>" class="btn btn-sm btn-dark">Kembali</a>
        </div>
      </h4>
      <hr class="bg-<?= $toko['tema_tk'] ?>">
      <div class="card shadow">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?= base_url('asset/produk/' . $produk['foto_prd']); ?>" class="card-img">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title"><?= $produk['nm_prd']; ?></h3>
              <hr class="mt-0 bg-dark">
              <p class="card-text inline">
                <h5>Harga: Rp. <?= number_format($produk['hrg_prd']); ?> <sup><span class="badge badge-dark"><?= $produk['disk_prd']; ?>%</span></sup></h5>
                <h5>Stok: <span class="badge badge-dark"><?= $produk['stok_prd']; ?></span></h5>
                <h5>Berat: <span class="badge badge-dark"><?= $produk['brt_prd']; ?> gram</span></h5>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card shadow mt-2">
        <div class="card-body">
          <h3>Deskripsi:</h3>
          <?= $produk['desc_prd']; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('admin/layouts/footer') ?>
</body>

</html>