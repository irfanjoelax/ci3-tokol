<?php $this->load->view('admin/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-3">
      <?php $this->load->view('admin/layouts/_menu') ?>
    </div>
    <div class="col-9">
      <h4>
        Halaman Beranda
        <!-- <div class="float-right"><a href="" class="btn btn-sm btn-<?= $toko['tema_tk'] ?>">Tambah Kategori</a></div> -->
      </h4>
      <hr class="bg-<?= $toko['tema_tk'] ?>">
    </div>
  </div>
</div>

<?php $this->load->view('admin/layouts/footer') ?>
</body>

</html>