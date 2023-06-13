<div class="container-fluid" onload="updateTotal()">
    <div class="row border-bottom">
        <div class="col">
            <h1 class="display-6">Transaksi : <?= $detail_transaksi->id_transaksi ?></h1>
        </div>
        <div class="col d-flex flex-row-reverse text-secondary-emphasis">
            <h6>Tanggal : <?= $detail_transaksi->tanggal_transaksi ?></h6>
        </div>
    </div>
    <div class="row mt-3 mb-3 px-2">
        <div class="col gx-5 border-end-bottom">
            <div class="row mb-3 p-1 bg-secondary bg-opacity-10 border border-secondary-emphasis border-start-0 rounded-end">
                <div class="col d-flex flex-row">
                    <h4 class="lead">Alamat</h4>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <div class="input-group">
                        <span class="input-group-text">Nama Depan dan Belakang</span>
                        <input type="text" aria-label="First name" disabled readonly class="form-control" value='<?= $detail_transaksi->nama_depan ?>'>
                        <input type="text" aria-label="Last name" disabled readonly class="form-control" value='<?= $detail_transaksi->nama_belakang ?>'>
                    </div>
                </div>

            </div>
            <div class="mb-3 row">
                <div class="input-group">
                    <span class="input-group-text">Alamat</span>
                    <textarea class="form-control" aria-label="With textarea" disabled readonly><?= $detail_transaksi->alamat ?></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="input-group mb-3">
                    <span class="input-group-text">Kecamatan</span>
                    <input type="text" class="form-control" aria-label="Kecamatan" disabled readonly value="<?= $detail_transaksi->kecamatan ?>">
                    <span class="input-group-text">Kota</span>
                    <input type="text" class="form-control" aria-label="Kota" disabled readonly value="<?= $detail_transaksi->kota ?>">
                </div>
            </div>
            <div class="mb3 row">
                <div class="input-group mb-3">
                    <span class="input-group-text">Provinsi</span>
                    <input type="text" class="form-control" aria-label="Provinsi" disabled readonly value="<?= $detail_transaksi->provinsi ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="input-group mb-3">
                    <span class="input-group-text">Kode Pos</span>
                    <input type="text" class="form-control" aria-label="Kode Pos" disabled readonly value="<?= $detail_transaksi->kode_pos ?>">
                    <span class="input-group-text">No Telepon</span>
                    <input type="text" class="form-control" aria-label="No Telepon" disabled readonly value="<?= $detail_transaksi->no_telp ?>">
                </div>
            </div>
        </div>
        <div class="col border-start gx-5">
            <div class="row mb-3 p-1 bg-secondary bg-opacity-10 border border-secondary-emphasis border-end-0 rounded-start">
                <div class="col d-flex flex-row-reverse">

                    <h4 class="lead">Konfirmasi Pembayaran</h4>
                </div>
            </div>
            <div class="mb3 row">
                <?php if ($konfirmasi_pembayaran != NULL) { ?>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Username</span>
                        <input type="text" class="form-control" aria-label="Username" disabled readonly value="<?= $konfirmasi_pembayaran['id_transaksi'] ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nama Rekening</span>
                        <input type="text" class="form-control" aria-label="Nama Rekening" disabled readonly value="<?= $konfirmasi_pembayaran['nama_rekening'] ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tanggal Pembayaran</span>
                        <input type="text" class="form-control" aria-label="Tanggal Pembayaran" disabled readonly value="<?= $konfirmasi_pembayaran['tanggal_pembayaran'] ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Bank Tujuan</span>
                        <input type="text" class="form-control" aria-label="Bank Tujuan" disabled readonly value="<?= $konfirmasi_pembayaran['bank'] ?>">
                    </div>
                    <img src="<?= base_url('uploads/bukti/') . $konfirmasi_pembayaran['gambar'] ?>" class="img-fluid img-thumbnail" alt="...">
                <?php } else { ?>
                    <div class="col d-flex justify-content-center">
                        <h4 class="lead">Belum diInput Costumer</h4>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col mb-3 p-1 bg-secondary bg-opacity-10 border border-secondary-emphasis border-start-0 border-end-0 ">
            <div class="col d-flex justify-content-center">
                <h4 class="lead">Daftar Barang</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <table class="table">
                    <thead class="table-dark">
                        <tr>

                            <td>Gambar</td>
                            <td>Nama Barang</td>
                            <td>Harga Barang</td>
                            <td>Jumlah</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($detail_barang as $i) : ?>
                            <tr>
                                <td><img src="<?= base_url('uploads/admin/') . $i['gambar'] ?>" alt="" width="100"></td>
                                <td><?= $i['nama_barang'] ?></td>
                                <td><?= number_to_currency($i['harga_barang'], 'IDR') ?></td>
                                <td><?= $i['jumlah_barang'] ?></td>
                                <td class='subtotal'><?= number_to_currency(($i['harga_barang'] * $i['jumlah_barang']), 'IDR') ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <td colspan="4">Total Transaksi </td>
                        <td class='total'> <?= number_to_currency($total_harga, 'IDR') ?></td>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>