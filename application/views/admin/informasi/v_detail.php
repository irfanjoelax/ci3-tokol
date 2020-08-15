<?php $this->load->view('admin/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-3">
      <?php $this->load->view('admin/layouts/_menu') ?>
    </div>
    <div class="col-9">
      <h4>
        Detail Informasi
        <div class="float-right"><a href="<?= site_url('admin/informasi'); ?>" class="btn btn-sm btn-dark">Kembali</a></div>
      </h4>
      <hr class="bg-<?= $toko['tema_tk'] ?>">
      <div class="card">
        <div class="card-header">
          <?= $informasi['jdl_inf']; ?>
        </div>
        <div class="card-body">
          <p class="card-text"><?= $informasi['isi_inf']; ?></p>
          <a href="<?= site_url('admin/informasi/ubah/' . $informasi['id_inf']); ?>" class="btn btn-<?= $toko['tema_tk'] ?>">Ubah</a>
          <a href="<?= site_url('admin/informasi/hapus/' . $informasi['id_inf']); ?>" class="btn btn-secondary ?>">Hapus</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('admin/layouts/footer') ?>
</body>

</html>