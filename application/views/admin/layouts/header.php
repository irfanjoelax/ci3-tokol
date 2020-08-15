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

  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

  <!-- Material ICon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

  <!-- Summernote -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

  <title><?= $title; ?></title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white border-bottom shadow-sm mb-4">
    <div class="container">
      <span class="navbar-brand mb-0 h1 text-<?= $toko['tema_tk'] ?> text-center text-uppercase mr-5">
        <img src="<?= base_url('asset/logo/' . $toko['logo_tk']); ?>" alt="favicon" width="50"><br>
        <strong><?= $toko['nama_tk'] ?></strong>
      </span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <?php if ($this->session->userdata('login') == true) { ?>
            <li class="nav-item mr-2">
              <a class="nav-link" href="<?= site_url('/'); ?>" target="blank">Kunjungi Website </a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" href="<?= site_url('admin/profil'); ?>">Profil</a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" href="<?= site_url('auth/logout'); ?>">Keluar </a>
            </li>
          <?php } else { ?>
            <li class="nav-item mr-2">
              <a class="btn btn-<?= $toko['tema_tk'] ?>" href="<?= site_url('/'); ?>">
                <i class="zmdi zmdi-navigation"></i>&nbsp; Ke Website
              </a>
            </li>
          <?php }; ?>
        </ul>
      </div>
    </div>
  </nav>