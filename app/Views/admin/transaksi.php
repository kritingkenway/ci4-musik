<?= $this->extend('layout/admin_template') ?>

<?= $this->section('content') ?>



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><?= $title ?></h1>

        </div>
        <div class="row">
            <div class="col mt-3">


                <!-- HTML DETAIL -->
                <div class="modal fade" id="staticBackdrop2" class="myModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Detail Transaksi</h5>
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
                                    <th width="100">Kode Transaksi</th>
                                    <th width="100">User</th>
                                    <th width="100">Tanggal Transaksi</th>
                                    <th width="100">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $angka = 1;
                                foreach ($transaksi as $i) : ?>
                                    <tr>
                                        <td><?= $angka++ ?></td>
                                        <td><?= $i['id_transaksi'] ?></td>
                                        <td><?= $i['nama_user'] ?></td>
                                        <td><?= $i['tanggal_transaksi'] ?></td>

                                        <td>
                                            <button type="button" class="btn btn-info mb-2 d-block" onclick="detailTransaksi('<?= $i['id_transaksi'] ?>')" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Lihat Detail</button>

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