<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
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
    <h1 class="display-4"><span class="font-weight-bold">Melody Store</span></h1>
      <hr>
      <p class="lead font-weight-bold">Toko Alat Musik Terlengkap di Subang<br>
      </p>

    <div class ="d-flex justify-content-between align-items-center mt-4">
          <div class="d-flex align-items-center">
            </div>
            <div class="wrap-search">
              <input type="text" class="form-control" placeholder="Cari Produk">
              <div class="wrap-icon-s">
                <img class="icon-media" src="assets/images/search-icon.png" alt="">
              </div>
            </div>
            <p>
          </div>
       </div>
    </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg  bg-dark">
    <div class="container">
      <a class="navbar-brand text-white" href="index.html"><strong><?= $title ?> </strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link mr-4" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4" href="/collection">DAFTAR BARANG</a>
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

  <!-- Menu -->


  <div class="container">

    <div class="row mt-3 text-center">
      <?php if ($collection != NULL) { ?>
        <?php foreach ($collection as $produk) : ?>
          <div class="col-md-3">
            <div class="card border-dark">
              <img src="<?= base_url('uploads/admin/') . $produk['gambar'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold"><?= $produk['nama_barang'] ?></h5>
                <label class="card-text harga"><?= number_to_currency($produk['harga_barang'], 'IDR') ?></label><br>
                <a href="/collection/<?= $produk['id_barang'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Lihat Detail</a>
                <!-- <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('566');"><i class="fa fa-heart"></i></button>
                <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('566');"><i class="fa fa-exchange"></i></button> -->
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php } else { ?>
        <h1>Tidak Ada Daftar Barang</h1>
      <?php } ?>
      <!-- Akhir Menu -->

      <!-- Awal Footer -->
      <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">

          </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/jquery.js"></script>
</body>

</html>