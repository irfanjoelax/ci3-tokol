<?php $this->load->view('web/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-<?= $toko['tema_tk'] ?> text-decoration-none" href="<?= site_url('/'); ?>">Beranda</a></li>
          <li class="breadcrumb-item"><a class="text-<?= $toko['tema_tk'] ?> text-decoration-none" href="<?= site_url('/produk'); ?>">Produk</a></li>
          <li class="breadcrumb-item active">Detail</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-5 mb-2">
      <div class="card shadow">
        <div class="card-body">
          <img src="<?= base_url('asset/kategori/jam.jpg'); ?>" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="col-lg-7">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">
          <a href="#" class="btn btn-<?= $toko['tema_tk'] ?>">Tambah</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero ad ex temporibus provident placeat. Facere velit expedita vitae laudantium qui earum vel dolore et rerum repellendus minima, explicabo adipisci! Ad omnis temporibus beatae incidunt nobis hic maiores quos necessitatibus, iste a dolor. Nulla at id eaque est, doloribus ab ullam fugit saepe expedita repudiandae! Omnis, inventore? Ipsa consectetur, ullam quos culpa minima nihil corrupti ipsam ex sequi voluptates necessitatibus quis, dicta nesciunt adipisci praesentium, atque tenetur libero modi amet esse eveniet sunt. Eveniet praesentium quo distinctio, consequuntur eos cum ullam. Vitae nesciunt magnam minima aspernatur temporibus atque, nostrum consequuntur voluptatibus molestias cum in asperiores obcaecati. Impedit veritatis esse sed, dolorum amet incidunt vitae inventore? Ullam maiores libero corrupti veniam voluptates corporis neque distinctio dolorum? Odit ut quia porro fugit iure facere, architecto ratione alias quis similique sit quae aliquid excepturi harum explicabo doloremque vel eos necessitatibus, deleniti nobis provident voluptatibus!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('web/layouts/footer') ?>
</body>

</html>