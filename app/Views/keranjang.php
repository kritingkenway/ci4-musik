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
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="index.html"><strong>Produk</strong></a>
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
                    <!-- <li class="nav-item">
                        <a class="nav-link mr-4" href="login.php">LOGOUT</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="/logout">LOGOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="/cart"><img src="images/troli.png" class="card-img-top" alt="Image" height="42" width="42"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Cart -->
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                <h1>Keranjang Belanja</h1>
                <table class="table-shopping-cart m-t-15">
                    <tbody>
                        <tr class="table-head table">
                            <th class="column-1">Gambar</th>
                            <th class="column-2">Produk</th>
                            <th class="column-3">Harga</th>
                            <th class="column-4 p-l-70">Jumlah</th>
                            <th class="column-5">Sub Total</th>
                            <th class="column-6" width="20%">Action</th>
                        </tr>
                        <?php foreach ($items as $i) : ?>
                            <tr>
                                <td class="column-1"><img src="#" alt="#"></td>
                                <td class="column-2"><?= $i['nama_barang'] ?></td>
                                <td class="column-3"><?= number_to_currency($i['harga_barang'], 'IDR') ?></td>
                                <td class="column-4 p-l-70"><?= $i['qty'] ?></td>
                                <td class="column-5"><?= number_to_currency(($i['harga_barang'] * $i['qty']), 'IDR') ?></td>
                                <td class="column-6" width="20%">Action</td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <td class="column-1" colspan="4">Total Belanja</td>
                            <td class="column-2"><?= $total ?></td>
                        </tr>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>

        <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
            <div class="flex-w flex-m w-full-sm">

                <div class="size16 trans-0-4 m-t-10 m-b-10 m-r-10">
                    <!-- Button -->
                    <a href="http://localhost/tokoonline/keranjang/hapus_keranjang" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 p-r-10 p-t-10 p-b-10 p-l-10">
                        Bersihkan Keranjang Belanja
                    </a>
                </div>
            </div>

            <div class="size10 trans-0-4 m-t-10 m-b-10">
                <!-- Button -->
                <a href="http://localhost/tokoonline/keranjang/checkout" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                    Check Out
                </a>

            </div>
        </div>
    </div>