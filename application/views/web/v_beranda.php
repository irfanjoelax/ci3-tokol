<?php $this->load->view('web/layouts/header') ?>

<!-- carousel -->
<div class="container mt-2">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active" data-interval="1500">
            <img src="<?= base_url('asset/iklan/iklan (1).png'); ?>" class="d-block w-100">
         </div>
         <div class="carousel-item" data-interval="1500">
            <img src="<?= base_url('asset/iklan/iklan (2).png'); ?>" class="d-block w-100">
         </div>
         <div class="carousel-item" data-interval="1500">
            <img src="<?= base_url('asset/iklan/iklan (3).png'); ?>" class="d-block w-100">
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>
</div>

<!-- daftar kategori -->
<div class="container mt-2">
   <h4 class="text-center font-weight-bold mb-2">Kategori</h4>
   <div class="row">
      <div class="col-sm-4 mt-2">
         <ul class="list-group">
            <li class="list-group-item list-group-item-<?= $toko['tema_tk'] ?>">
               <span class="text-white">Daftar Kategori:</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
               Cras justo odio
               <span class="badge badge-<?= $toko['tema_tk'] ?> badge-pill">14</span>
            </li>
         </ul>
      </div>
      <div class="col-sm-8 mt-1">
         <div class="row">
            <div class="col-lg-3 col-4 mt-1">
               <div class="card">
                  <img src="<?= base_url('asset/kategori/jam.jpg'); ?>" class="card-img-top">
                  <div class="card-body text-center">
                     <small class="card-title">Card title</small>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-4 mt-1">
               <div class="card">
                  <img src="<?= base_url('asset/kategori/sandal.jpg'); ?>" class="card-img-top">
                  <div class="card-body text-center">
                     <small class="card-title">Card title</small>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-4 mt-1">
               <div class="card">
                  <img src="<?= base_url('asset/kategori/sepatu.jpg'); ?>" class="card-img-top">
                  <div class="card-body text-center">
                     <small class="card-title">Card title</small>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-4 mt-1">
               <div class="card">
                  <img src="<?= base_url('asset/kategori/jam.jpg'); ?>" class="card-img-top">
                  <div class="card-body text-center">
                     <small class="card-title">Card title</small>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="container mt-4">
   <hr class="bg-secondary">
</div>

<!-- daftar produk terbaru -->
<div class="container mt-2">
   <h4 class="text-center font-weight-bold mb-2">Produk atau Barang Terbaru</h4>
   <div class="row">
      <div class="col-lg-3 col-6">
         <div class="card shadow mt-1">
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
      <div class="col-lg-3 col-6">
         <div class="card shadow mt-1">
            <img src="<?= base_url('asset/kategori/sepatu.jpg'); ?>" class="card-img-top">
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
      <div class="col-lg-3 col-6">
         <div class="card shadow mt-1">
            <img src="<?= base_url('asset/kategori/sandal.jpg'); ?>" class="card-img-top">
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
      <div class="col-lg-3 col-6">
         <div class="card shadow mt-1">
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

<!-- jumbotron -->
<div class="container mt-4">
   <div class="jumbotron text-center text-white bg-<?= $toko['tema_tk'] ?>">
      <h3 class="display-6">Ayo belanja di sini dengan banyak promo menarik didalamnya</h3>
      <hr class="my-3 bg-white">
      <a class="btn btn-light btn-lg" href="#">Ayo Serbu</a>
   </div>
</div>

<?php $this->load->view('web/layouts/footer') ?>
</body>

</html>