<!-- footer -->
<footer class="pt-4 my-md-5 pt-md-5 border-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-6">
        <img class="mb-2" src="<?= base_url('asset/logo/' . $toko['logo_tk']); ?>" width="24" height="24">
        <?= TITLE; ?>
        <p class="d-block mb-3 text-muted">&copy; Sejak <?= $toko['sejak_tk'] ?></p>
      </div>
      <div class="col-lg-3 col-6">
        <h5 class="font-weight-bold">Menu</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted text-decoration-none" href="<?= site_url('/'); ?>">Beranda</a></li>
          <li><a class="text-muted text-decoration-none" href="<?= site_url('/kategori'); ?>">Kategori</a></li>
          <li><a class="text-muted text-decoration-none" href="<?= site_url('/produk'); ?>">Produk</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-6">
        <h5 class="font-weight-bold">Hubungi Kami</h5>
        <ul class="list-unstyled text-small">
          <li><?= $toko['tlp_tk'] ?></li>
          <li><?= $toko['email_tk'] ?></li>
          <li><?= $toko['almt_tk'] ?></li>
        </ul>
      </div>
      <div class="col-lg-3 col-6">
        <h5 class="font-weight-bold">Ikuti Kami</h5>
        <a href="" class="btn btn-<?= $toko['tema_tk'] ?>"><i class="zmdi zmdi-hc-lg zmdi-facebook-box"></i></a>
        <a href="" class="btn btn-<?= $toko['tema_tk'] ?>"><i class="zmdi zmdi-hc-lg zmdi-instagram"></i></a>
        <a href="" class="btn btn-<?= $toko['tema_tk'] ?>"><i class="zmdi zmdi-hc-lg zmdi-whatsapp"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>