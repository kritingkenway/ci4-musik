<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="<?= base_url() ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/css/price-range.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/css/animate.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/css/main.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/frontend/images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>assets/frontend/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets/frontend/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets/frontend/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>assets/frontend/images/ico/apple-touch-icon-57-precomposed.png">



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/index.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/fontawesome/css/all.min.css">





  <title>MelodyStore.com</title>
</head>

<body>
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="display-2"><span class="font-weight-bold">Melody Store</span></h1>
      <hr>
      <p class="lead font-weight-bold">Toko Alat Musik Terlengkap di Subang<br>
      </p>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg  bg-dark">
    <div class="container">
      <a class="navbar-brand text-white" href="#"><strong><?= $title ?> </strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link mr-4 text-white" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4 text-white" href="/collection">DAFTAR BARANG</a>
          </li>
          <?php if (session()->has('logged-in')) { ?>
            <li class="nav-item">
              <a class="nav-link mr-4 " href="/logout">LOGOUT</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link mr-4 " href="/login">LOGIN</a>
            </li>

          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->

  <div class="container">
    <div class="judul text-center mt-5">
      <h3 class="font-weight-bold">Melody Store</h3>
      <h5>Jl. MT. Haryono No. 59a, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat 41211
        <br>Buka Jam <strong>09:00 - 21:00</strong>
      </h5>
      <div class="row mt-3">
        <div class="col-md-12">
          <img src="<?= base_url() ?>/assets/images/R.png" alt="" />
        </div>


        <!-- Akhir Menu -->


        <!-- Awal Footer -->


        <!--/recommended_items-->

      </div>
    </div>
  </div>
  </section>
  <!--Footer-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="companyinfo">
              <h2><span>Alat Musik</span>-online</h2>
              <p>Menjual berbagai alat musik berkualitas</p>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="<?= base_url() ?>/assets/images/1.png" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <h2>Metode bayar</h2>
                <p>Melayani metode pembayaran transfer maupun COD</p>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="<?= base_url() ?>/assets/images/pack.png" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <h2>Packing aman</h2>
                <p>Produk dipacking dengan aman sebelum dikirimkan</p>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="<?= base_url() ?>/assets/images/3.png" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <h2>Pengiriman cepat</h2>
                <p>Pengiriman lebih cepat, efesien, dan tepat waktu</p>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="<?= base_url() ?>/assets/images/4.png" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <h2>Jaminan garansi</h2>
                <p>Sebagian besar produk yang kami jual memiliki garansi</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="address">
              <img src="<?= base_url() ?>/assets/images/map.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-widget">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>Service</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Online Help</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Order Status</a></li>
                <li><a href="#">Change Location</a></li>
                <li><a href="#">FAQ’s</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>Policies</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privecy Policy</a></li>
                <li><a href="#">Refund Policy</a></li>
                <li><a href="#">Billing System</a></li>
                <li><a href="#">Ticket System</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>Policies</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privecy Policy</a></li>
                <li><a href="#">Refund Policy</a></li>
                <li><a href="#">Billing System</a></li>
                <li><a href="#">Ticket System</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>About Shopper</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Company Information</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Store Location</a></li>
                <li><a href="#">Affillate Program</a></li>
                <li><a href="#">Copyright</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3 col-sm-offset-1">
            <div class="single-widget">
              <h2>About Shopper</h2>
              <form action="#" class="searchform">
                <input type="text" placeholder="Your email address" />
                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                <p>Get the most recent updates from <br />our site and be updated your self...</p>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <p class="pull-left">Copyright © 2023 Alat Musik-Online Inc. All rights reserved.</p>
          <p class="pull-right">Designed by <span><a target="_blank" href="">MelodyStore.com</a></span></p>
        </div>
      </div>
    </div>

  </footer> <!--/Footer-->



  <script src="<?= base_url() ?>/assets/frontend/js/jquery.js"></script>
  <script src="<?= base_url() ?>/assets/frontend/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/assets/frontend/js/jquery.scrollUp.min.js"></script>
  <script src="<?= base_url() ?>/assets/frontend/js/price-range.js"></script>
  <script src="<?= base_url() ?>/assets/frontend/js/jquery.prettyPhoto.js"></script>
  <script src="<?= base_url() ?>/assets/frontend/js/main.js"></script>



  <!-- Akhir Footer -->