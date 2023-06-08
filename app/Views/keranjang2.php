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
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/index.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/fontawesome/css/all.min.css">




  <title>Keranjang belanja</title>
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

      <a class="navbar-brand text-white" href="index.html"><strong>Home </strong></a>
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
          <li class="nav-item">
            <a class="nav-link mr-4 text-white" href="/konfirmasi-pembayaran">Konfirmasi Pembayaran</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link mr-4 " href="/logout">LOGOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4" href="/cart"><img src="<?= base_url() ?>/assets/images/s.png" class="card-img-top" alt="Image" height="42" width="42"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->




  <section class="konten mb-5">
    <div class="container">
      <h1>Keranjang Belanja</h1>
      <hr>


      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Gambar </th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Sub Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($items as $i) : ?>
            <form action="/cart/update" method="post" id='update'>
              <input type="hidden" name='_method' value="put">
            </form>
            <form action="/cart/delete/<?= $i['id'] ?>" method="post" id="delete">
              <input type="hidden" name='_method' value="delete">
            </form>
            <tr>
              <td class="column-1"><img src="<?= base_url('uploads/admin/') . $i['gambar'] ?>" width="150"></td>
              <td class="column-2"><?= $i['nama_barang'] ?></td>
              <td class="column-3"><?= number_to_currency($i['harga_barang'], 'IDR') ?></td>
              <td class="column-4 p-l-70">
                <input class='number' type="number" min='1' value="<?= $i['qty'] ?>" name='qty[]' form='update'></form>

              </td>
              <td class="column-5"><?= number_to_currency(($i['harga_barang'] * $i['qty']), 'IDR') ?></td>
              <td class="column-6" width="20%">


                <button type='submit' class='btn btn-danger' form='delete'><i class="fa fa-trash"></i></button>

              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan='4' class='text-right'>
              Total
            </td>
            <td colspan=''>
              <?= number_to_currency(
                $total,
                'IDR'
              ) ?>
            </td>
            <td colspan=''>
              <button type='submit' class="btn btn-primary" form='update'>Update Keranjang</button>
            </td>
          </tr>
        </tfoot>
      </table>


      <a href="/collection" class="btn btn-default">Lanjutkan belanja</a>
      <a href="/checkout" class="btn btn-primary">Checkout</a>
    </div>
  </section>

</body>

</html>