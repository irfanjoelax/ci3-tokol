<ul class="list-group list-group-flush">
  <li class="list-group-item">
    <a href="<?= site_url('admin/beranda') ?>" class="<?= (($this->uri->segment(2) == 'beranda') ? 'text-' . $toko['tema_tk'] : 'text-dark') ?> text-decoration-none">
      Beranda
    </a>
  </li>
  <li class="list-group-item">
    <a href="<?= site_url('admin/kategori') ?>" class="<?= (($this->uri->segment(2) == 'kategori') ? 'text-' . $toko['tema_tk'] : 'text-dark') ?> text-decoration-none">
      Kategori
    </a>
  </li>
  <li class="list-group-item">
    <a href="<?= site_url('admin/produk') ?>" class="<?= (($this->uri->segment(2) == 'produk') ? 'text-' . $toko['tema_tk'] : 'text-dark') ?> text-decoration-none">
      Produk
    </a>
  </li>
  <li class="list-group-item">
    <a href="<?= site_url('admin/transaksi') ?>" class="<?= (($this->uri->segment(2) == 'transaksi') ? 'text-' . $toko['tema_tk'] : 'text-dark') ?> text-decoration-none">
      Transaksi
    </a>
  </li>
  <li class="list-group-item">
    <a href="<?= site_url('admin/informasi') ?>" class="<?= (($this->uri->segment(2) == 'informasi') ? 'text-' . $toko['tema_tk'] : 'text-dark') ?> text-decoration-none">
      Informasi
    </a>
  </li>
  <li class="list-group-item">
    <a href="<?= site_url('admin/pengaturan') ?>" class="<?= (($this->uri->segment(2) == 'pengaturan') ? 'text-' . $toko['tema_tk'] : 'text-dark') ?> text-decoration-none">
      Pengaturan
    </a>
  </li>
  <li class="list-group-item">&nbsp;</li>
</ul>