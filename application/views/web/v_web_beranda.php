<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <!-- favicon -->
   <link rel="shortcut icon" href="<?= base_url('asset/favicon.svg') ?>" type="image/x-icon">

   <!-- font icon -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

   <title><?= TITLE ?></title>
</head>

<body style="height: 1000px;">
   <!-- web version -->
   <div class="d-none d-md-block">
      <!-- navigasi  -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
         <div class="container-fluid">
            <!-- brand -->
            <a class="navbar-brand font-weight-bolder" href="<?= base_url('/') ?>">
               <img src="<?= base_url('asset/favicon.svg') ?>" width="30" height="30" alt="">
               <?= TITLE ?>
            </a>

            <!-- form pencarian web version-->
            <form class="form-inline my-2 my-lg-0 ">
               <input class="form-control mr-sm-2" type="text" placeholder="Pencarian produk.." size="35">
               <button class="btn btn-warning text-white my-2 my-sm-0" type="submit">
                  <i class="zmdi zmdi-hc-lg zmdi-search"></i>&nbsp;Cari
               </button>
            </form>

            <!-- menu kiri -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item ml-3 active font-weight-bolder">
                     <a class="nav-link" href="#">
                        <i class="zmdi zmdi-hc-lg zmdi-layers"></i> Beranda
                     </a>
                  </li>
                  <li class="nav-item ml-3">
                     <a class="nav-link" href="#">
                        <i class="zmdi zmdi-hc-lg zmdi-label"></i> Produk
                     </a>
                  </li>
                  <li class="nav-item ml-3">
                     <a class="nav-link" href="#">
                        <i class="zmdi zmdi-hc-lg zmdi-store"></i> Pedagang
                     </a>
                  </li>
                  <li class="nav-item ml-3">
                     <a class="nav-link" href="#">
                        <i class="zmdi zmdi-hc-lg zmdi-shopping-basket"></i> Keranjang
                        <sup class="badge badge-warning text-white">9</sup>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container-fluid">
         <div class="row bg-success text-white">
            <div class="col-12">
               <footer class="container-fluid pt-4 my-md-5 pt-md-2">
                  <div class="row">
                     <div class="col-4">
                        <h5 class="font-weight-bold">Tentang</h5>
                        <hr class="bg-white">
                        <small class="d-block mb-3"></small>
                        <div class="row">
                           <div class="col-3 my-auto text-center">
                              <img class="" src="<?= base_url('asset/favicon.svg') ?>" alt="" width="75" height="75">
                           </div>
                           <div class="col-9 text-justify">
                              <small>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, ex. Ipsum,
                                 <br>
                                 Email : admin@admin.com
                                 <br>
                                 Telepon : 085246805241
                                 <br>
                                 &copy; <?= date('Y') . ' - ' . TITLE ?>
                              </small>
                           </div>
                        </div>
                     </div>
                     <div class="col-4">
                        <h5 class="font-weight-bold">Bantuan</h5>
                        <hr class="bg-white">
                        <ul class="list-unstyled text-small">
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-arrow-right"></i>&nbsp;Link Bantuan
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-arrow-right"></i>&nbsp;Link Bantuan
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-arrow-right"></i>&nbsp;Link Bantuan
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-arrow-right"></i>&nbsp;Link Bantuan
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-2">
                        <h5 class="font-weight-bold">Menu</h5>
                        <hr class="bg-white">
                        <ul class="list-unstyled text-small">
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-layers"></i>&nbsp;Beranda
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-label"></i>&nbsp;Produk
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-store"></i>&nbsp;Pedagang
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-shopping-basket"></i>&nbsp;Keranjang
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-2">
                        <h5 class="font-weight-bold">Media Sosial</h5>
                        <hr class="bg-white">
                        <ul class="list-unstyled text-small">
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-facebook"></i>&nbsp;Facebook
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-twitter"></i>&nbsp;Twitter
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-instagram"></i>&nbsp;Instagram
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-youtube-play"></i>&nbsp;YouTube
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </footer>
            </div>
         </div>
      </div>
   </div>
   <!--/ web version -->

   <!-- mobile version -->
   <div class="d-md-none">
      <!-- navigasi  -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
         <div class="container-fluid">
            <!-- brand -->
            <a class="navbar-brand" href="<?= base_url('/') ?>">
               <img src="<?= base_url('asset/favicon.svg') ?>" width="30" height="30" alt="">
               <?= TITLE ?>
            </a>

            <div class="navbar-nav ml-auto">
               <a class="nav-link active" href="#">
                  <i class="zmdi zmdi-hc-lg zmdi-shopping-basket"></i>
                  <small><sup class="badge badge-warning text-white">9</sup></small>
               </a>
            </div>

            <!-- toggle menu mobile -->
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button> -->

            <!-- menu bawah -->
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item ml-3 active font-weight-bolder">
                     <a class="nav-link" href="#">
                        <i class="zmdi zmdi-hc-lg zmdi-layers"></i> Beranda
                     </a>
                  </li>
                  <li class="nav-item ml-3">
                     <a class="nav-link" href="#">
                        <i class="zmdi zmdi-hc-lg zmdi-label"></i> Produk
                     </a>
                  </li>
                  <li class="nav-item ml-3">
                     <a class="nav-link" href="#">
                        <i class="zmdi zmdi-hc-lg zmdi-store"></i> Pedagang
                     </a>
                  </li>
                  <li class="nav-item ml-3">
                     <a class="nav-link" href="#">
                        <i class="zmdi zmdi-hc-lg zmdi-shopping-basket"></i> Keranjang
                        <sup class="badge badge-warning text-white">9</sup>
                     </a>
                  </li>
               </ul>
            </div> -->
         </div>
      </nav>

      <!-- form pencarian -->
      <div class="container" style="margin-top: 70px;">
         <div class="row">
            <div class="col">
               <form action="#" method="post">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder="Pencarian produk..">
                     <div class="input-group-append">
                        <span class="bg-warning input-group-text text-white" id="basic-addon2">
                           <i class="zmdi zmdi-hc-lg zmdi-search"></i>&nbsp;Cari
                        </span>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- navigasi menu bar -->
      <footer class="fixed-bottom bg-success text-center">
         <div class="row">
            <div class="col-4">
               <small>
                  <a class="text-warning" href="#">
                     <i class="zmdi zmdi-hc-lg zmdi-layers"></i><br>
                     Beranda
                  </a>
               </small>
            </div>
            <div class="col-4">
               <small>
                  <a class="text-white" href="#">
                     <i class="zmdi zmdi-hc-lg zmdi-label"></i><br>
                     Produk
                  </a>
               </small>
            </div>
            <div class="col-4">
               <small>
                  <a class="text-white" href="#">
                     <i class="zmdi zmdi-hc-lg zmdi-store"></i><br>
                     Pedagang
                  </a>
               </small>
            </div>
         </div>
      </footer>
   </div>


   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>