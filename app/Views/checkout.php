<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="<?= base_url() ?>/assets/frontend/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/frontend/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/frontend/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/frontend/css/price-range.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/frontend/css/animate.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/frontend/css/main.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/frontend/css/responsive.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?= base_url() ?>/assets/frontend/images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>/assets/frontend/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>/assets/frontend/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>/assets/frontend/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>/assets/frontend/images/ico/apple-touch-icon-57-precomposed.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/style3.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/fontawesome/css/all.min.css">




  <title>Informasi</title>
</head>

<body>

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
            <li class="nav-item">
              <a class="nav-link mr-4 " href="/logout">LOGOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="/cart"><img src="<?= base_url() ?>/assets/images/s.png" class="card-img-top" alt="Image" height="42" width="42"></a>
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



  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LIST PEMESANAN</h2>

      </div>

      <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <thead>

          <tr>
            <td>No</td>
            <td>Nama Barang</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Sub Total</td>
          </tr>
        </thead>
        <tbody>

          <?php
          $no = 1;
          foreach ($items as $i) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $i['nama_barang'] ?></td>
              <td><?= $i['harga_barang'] ?></td>
              <td><?= $i['qty'] ?></td>
              <td><?= number_to_currency(($i['qty'] * $i['harga_barang']), 'IDR') ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
        <tfoot>

          <tr>
            <td colspan="4" align="right">TOTAL</td>
            <td align="right"><?= number_to_currency($total, 'IDR') ?></td>
          </tr>
        </tfoot>
      </table>



      <div id="card-title">
        <h5>ISI FORM DIBAWAH INI UNTUK MELANJUTKAN TRANSAKSI</h5>

      </div>
      <form action="/checkout" method="POST">
        <ul>
          <div class="row">
            <div class="col-8">
              <legend>Email</legend>
              <input type="text" class="form-control" name="" placeholder="Masukkan Email Anda">
              <input type="hidden" class="form-control" name="id_alamat" value='0'>
            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col-8">
              <legend>Alamat Pengiriman</legend>
              <input type="text" class="form-control" name="nama_depan" placeholder="Nama depan">
              <br>
              <input type="text" class="form-control" name="nama_belakang" placeholder="Nama belakang">
              <br>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat">
              <br>
              <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
              <br>
              <input type="text" class="form-control" name="kota" placeholder="Kota">
              <br>
              <input type="text" class="form-control" name="provinsi" placeholder="Provinsi">
              <br>
              <input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos">
              <br>
              <input type="text" class="form-control" name="no_telp" placeholder="No. Telepon">
            </div>
          </div>
          <br>
          <div class="btn btn-info btn-lg">
            <button type="submit" name='orders' class="btn btn-info btn-lg">Proses Transaksi</button>
          </div>
    </div>
    </form>
  </div>