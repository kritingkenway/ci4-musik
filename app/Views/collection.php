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

  <style type="text/css">
	html,body{
		padding: 0;
		margin:0;
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
		box-shadow: 0px 20px 40px 0px rgba(0,0,0,0.2);
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
         
          <ul class="navbar-nav ml-auto">
          
          <li class="dropdown"><a href="#"><img src="<?= base_url() ?>/assets/images/pp.png" class="card-img-top" alt="Image" height="35" width="35"></a>
                  <ul class="isi-dropdown">
                  <?php if (session()->has('logged-in')) { ?>
            <li class="nav-item">
              <a class="nav-link mr-4" href="/konfirmasi-pembayaran">Konfirmasi Pembayaran</a>
            </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link mr-4" href="/cart">Keranjang</a>
            </li>
            <?php if (session()->has('logged-in')) { ?>
            <li class="nav-item">
              <a class="nav-link mr-4 " href="/logout">Log-Out</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link mr-4 " href="/login">Log-In</a>
            </li>
            
          <?php } ?>
            </ul>
        </ul>
        
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->


  <div class="container">

    <div class="d-flex justify-content-between align-items-center mt-4">
      <div class="d-flex align-items-center">
      </div>
      <div class="wrap-search card border-dark">
        <form action="/collection" method="get">

          <input type="text" class="form-control" placeholder="Cari Produk" name='nama_barang'>
          <div class="wrap-icon-s">


            <img class="icon-media" src="assets/images/search-icon.png" alt="">

          </div>
        </form>
      </div>
      <p>
    </div>

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