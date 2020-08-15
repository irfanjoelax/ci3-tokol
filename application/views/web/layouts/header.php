<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- favicon -->
  <link rel="shortcut icon" href="<?= base_url('asset/logo/' . $toko['logo_tk']); ?>" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Material ICon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

  <title><?= $title; ?></title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
    <div class="container">
      <span class="navbar-brand mb-0 h1 text-<?= $toko['tema_tk'] ?> text-center text-uppercase mr-5">
        <img src="<?= base_url('asset/logo/' . $toko['logo_tk']); ?>" alt="favicon" width="50"><br>
        <strong><?= $toko['nama_tk'] ?></strong>
      </span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-2 <?= ($this->uri->segment(1) == '') ? ' font-weight-bold active' : '' ?>">
            <a class="nav-link" href="<?= site_url('/'); ?>">Beranda </a>
          </li>
          <li class="nav-item mr-2 <?= ($this->uri->segment(1) == 'kategori') ? ' font-weight-bold active' : '' ?>">
            <a class="nav-link" href="<?= site_url('/kategori'); ?>">Kategori </a>
          </li>
          <li class="nav-item mr-2 <?= ($this->uri->segment(1) == 'produk') ? ' font-weight-bold active' : '' ?>">
            <a class="nav-link" href="<?= site_url('/produk'); ?>">Produk </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Silakan cari produk.." size="30">
          <button class="btn btn-outline-<?= $toko['tema_tk'] ?> my-2 my-sm-0" type="submit">Cari</button>
          <a href="" class="text-decoration-none text-<?= $toko['tema_tk'] ?>">
            <i class="zmdi zmdi-hc-2x zmdi-shopping-cart ml-2"></i>
            <sub><span class="badge badge-<?= $toko['tema_tk'] ?>">0</span></sub>
          </a>
        </form>
      </div>
    </div>
  </nav>