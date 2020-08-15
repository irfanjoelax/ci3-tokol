<?php $this->load->view('web/layouts/header') ?>
<div class="container mt-2">
  <div class="row">
    <div class="col-lg-3 col-7">
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">
            <i class="zmdi zmdi-sort-amount-asc"></i>
          </label>
        </div>
        <select class="custom-select">
          <option value="1">Harga Acak</option>
          <option value="1">Rendah ketinggi</option>
          <option value="2">Tinggi kerendah</option>
        </select>
      </div>
    </div>
    <div class="col-lg-2 col-5">
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">
            <i class="zmdi zmdi-filter-list"></i>
          </label>
        </div>
        <select class="custom-select">
          <option value="2">Terbaru</option>
          <option value="1">Terlama</option>
        </select>
      </div>
    </div>
  </div>
  <hr class="bg-dark">
  <div class="row">
    <div class="col-lg-3 col-6">
      <div class="card shadow">
        <img src="<?= base_url('asset/kategori/jam.jpg'); ?>" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title">Card title</h6>
          <small class="card-text">
            <del>Rp. 125.000 </del>
            <sup><span class="badge badge-dark">10%</span></sup>
          </small><br>
          <p class="font-weight-bold">Rp. 100.000</p>
          <a href="#" class="btn btn-sm btn-<?= $toko['tema_tk'] ?>">Tambah</a>
          <a href="#" class="btn btn-sm btn-secondary">Lihat</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('web/layouts/footer') ?>
</body>

</html>