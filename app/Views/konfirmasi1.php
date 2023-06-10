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
  <link rel="shortcut icon" href="<?= base_url() ?>assets/frontend/images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>assets/frontend/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets/frontend/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets/frontend/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>assets/frontend/images/ico/apple-touch-icon-57-precomposed.png">



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/index.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/stylee.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fontawesome/css/all.min.css">




  <title><?= $title ?></title>

  <style type="text/css">
    html,
    body {
      padding: 0;
      margin: 0;
      font-family: sans-serif;
    }


    li.dropdown {
      display: inline-block;
    }

    .dropdown:hover .isi-dropdown {
      display: block;
    }

    .isi-dropdown a:hover {
      color: #fff !important;
    }

    .isi-dropdown {
      position: absolute;
      display: none;
      box-shadow: 0px 20px 40px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      background-color: #313335;
    }

    .isi-dropdown a {
      color: # !important;
    }

    .isi-dropdown a:hover {
      color: #232323 !important;
      background: #f3f3f3 !important;
    }
  </style>

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
      <a class="navbar-brand text-white" href="#"><strong><?= $title ?> </strong> </a>
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
            <ul class="navbar-nav ml-auto">

              <li class="dropdown"><a href="#"><img src="<?= base_url() ?>/assets/images/pp.png" class="card-img-top" alt="Image" height="35" width="35"></a>
                <ul class="isi-dropdown">
                  <li class="nav-item">
                    <a class="nav-link mr-4" href="/transaksi">PESANANKU</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mr-4" href="/konfirmasi-pembayaran">KONFIRMASI PEMBAYARAN</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link mr-4" href="/cart">KERANJANG</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link mr-4 " href="/logout">LOGOUT</a>
                  </li>
                </ul>
            </ul>
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



  <div id="card">
    <div id="card-content">
      <!-- <div id="card-title">
        <h2>LIST</h2>
        <div class="underline-title"></div>

      </div> -->

      <!-- <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <tr>
          <td>No</td>
          <td>Nama Barang</td>
          <td>Harga</td>
          <td>Jumlah</td>
          <td>Sub Total</td>
        </tr>


        <tr>
          <td colspan="4" align="right">TOTAL</td>
        </tr>
      </table> -->


      <div id="card-content">
        <div id="card-title">
          <h4>Isi form dibawah ini untuk melanjutkan Proses Pembelian Barang</h4>

        </div>


        <form method="POST" action="/konfirmasi-pembayaran" enctype="multipart/form-data">
          <div class="row">
            <label class="col-4">Kode.Order</label>
            <div class="col-8">
              <input type="text" class="form-control" name="id_transaksi" placeholder="Masukkan kode.Order">
            </div>
          </div>
          <div class="row">
            <label class="col-4">Username</label>
            <div class="col-8">
              <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda">
            </div>
          </div>
          <div class="row">
            <label class="col-4">Nama Pemilik Rekening</label>
            <div class="col-8">
              <input type="text" class="form-control" name="nama_rekening" placeholder="Masukkan Nama Pemilik Rekening">
            </div>
          </div>
          <div class="row">
            <label class="col-4">Tanggal Transfer</label>
            <div class="col-8">
              <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy">
            </div>
          </div>
          <div class="row">
            <label class="col-4">Bank Tujuan</label>
            <div class="col-8">
              <input type="text" class="form-control" name="bank" placeholder="Masukkan Bank Tujuan">
            </div>
          </div>
          <div class="row">
            <label class="col-4">Upload Bukti Pembayaran</label>
            <div class="col-8">
              <td><input type="file" name="gambar" id="filegambar"></td>
            </div>
          </div>
          <div class="row">
            <div class="btn btn-info btn-lg">
              <button type="submit" class="btn btn-info btn-lg">Input Data Pembayaran</button>
            </div>
          </div>
        </form>
      </div>