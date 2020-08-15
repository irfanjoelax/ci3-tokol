<?php $this->load->view('web/layouts/header') ?>
<div class="container mt-2 mb-2">
  <h4 class="text-center font-weight-bold mb-3">Semua Kategori</h4>
  <div class="row">
    <div class="col-lg-2 col-6">
      <div class="card text-center mb-2">
        <h6 class="card-header bg-secondary text-white">Featured</h6>
        <div class="card-body">
          <img src="<?= base_url('asset/kategori/jam.jpg'); ?>" class="img-fluid">
          <a href="#" class="btn btn-sm btn-<?= $toko['tema_tk'] ?> mt-2">Lebih Banyak</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('web/layouts/footer') ?>
</body>

</html>