<?= $this->extend('layout/admin_template') ?>

<?= $this->section('content') ?>



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><?= $title ?></h1>

        </div>
        <div class="row">
            <div class="col mt-3">
                <div class="row container">
                    <div class="col mb-3">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Tambah Produk
                        </button>
                    </div>
                </div>
                <!-- Form POST -->
                <div class="modal fade" id="staticBackdrop" class="myModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Buku</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/admin/produk/create" method="post" enctype="multipart/form-data">
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control" id="nama_barang" name='nama_barang'>
                                        <label for="nama_barang" class="form-label floatingInput">Nama Barang:</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <select name='id_kategori' class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected>Open this select menu</option>
                                            <?php foreach ($categories as $kategori) : ?>
                                                <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>

                                            <?php endforeach ?>
                                        </select>
                                        <label for="floatingSelect">Kategori:</label>
                                    </div>
                                    <div class="mb-3 form-floating">
                                        <input type='text' class="form-control" id="Stok_barang" rows="3" name='stok_barang'></input>
                                        <label for="Stok_barang" class="form-label floatingInput">Stok Barang:</label>
                                    </div>
                                    <div class="mb-3 form-floating">
                                        <input type='text' class="form-control" id="harga_barang" rows="3" name='harga_barang'></input>
                                        <label for="harga_barang" class="form-label floatingInput">Harga Barang:</label>
                                    </div>


                                    <div class="mb-3">
                                        <input class="form-control" type="file" id="formFile" name='gambar'>
                                    </div>

                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-secondary" value='Tambah'></input>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HTML DETAIL -->
                <div class="modal fade" id="staticBackdrop2" class="myModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="modalbox-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TABEL DATA -->

                <div class="row mb-3 container">
                    <div class="col">
                        <table class="table table-light  table-striped" style='vertical-align: middle;'>
                            <thead class="table-dark">

                                <tr>
                                    <th width="50">No</th>
                                    <th width="100">Gambar</th>
                                    <th width="100">Detail Buku</th>
                                    <th width="100">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $angka = 1;
                                foreach ($products as $product) : ?>
                                    <tr>
                                        <td><?= $angka++ ?></td>
                                        <td><img src="<?= base_url('uploads/admin/') . $product['gambar'] ?>" alt="" style="width: 200px;"></td>
                                        <td>
                                            <p><span>Nama Barang: </span> <?= $product['nama_barang'] ?></p>
                                            <p><span>Harga: </span> <?= number_to_currency($product['harga_barang'], "IDR") ?></p>
                                            <p><span>Stock: </span> <?= $product['stok_barang'] ?></p>


                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info mb-2 d-block" onclick="editProduk('<?= $product['id_barang'] ?>')" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Edit Produk</button>
                                            <a class="btn btn-danger" href="/admin/produk/delete/<?= $product['id_barang'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</main>


<?= $this->endsection() ?>