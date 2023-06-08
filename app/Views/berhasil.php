<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style4.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">




    <title>Melody Store</title>
</head>

<body>
<div id="card">
            <div id="card-content">
      <div id="card-title">
<section class="konten">
    <div class="container">
        <h1>Berhasil checkout</h1>
        <hr>
        <table class="table table-bordered">

            <h3>Detail Pesanan : <?= $id_transaksi ?></h3>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transaksi as $i) : ?>
                    <tr>
                        <td><?= $i['nama_barang'] ?></td>
                        <td><?= $i['harga_barang'] ?></td>
                        <td><?= $i['jumlah_barang'] ?></td>
                        <td><?= number_to_currency(($i['harga_barang'] * $i['jumlah_barang']), 'IRD') ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="/" class="btn btn-primary">Kembali ke halaman utama</a>
    </div>
</section>

</body>

</html>