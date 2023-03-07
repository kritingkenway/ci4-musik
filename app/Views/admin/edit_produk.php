<form action="/admin/produk/update/<?= $product['id_barang'] ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3 form-floating">
        <input type="text" class="form-control" id="nama_barang" name='nama_barang' value='<?= $product['nama_barang'] ?>'>
        <label for="nama_barang" class="form-label floatingInput">Nama Barang:</label>

    </div>
    <div class="form-floating mb-3">
        <select name='id_kategori' class="form-select" id="floatingSelect" aria-label="Floating label select example">

            <?php foreach ($categories as $kategori) : ?>
                <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>

            <?php endforeach ?>
        </select>
        <label for="floatingSelect">
            Kategori: *
            <?php for ($i = 0; $i < count($categories); $i++) {

                if ($categories[$i]['id_kategori'] == $product['id_kategori']) {
                    echo $categories[$i]['nama_kategori'];
                    break;
                }
            } ?>

        </label>
    </div>
    <div class="mb-3 form-floating">
        <input type='text' class="form-control" id="Stok_barang" rows="3" name='stok_barang' value='<?= $product['stok_barang'] ?>'></input>
        <label for="Stok_barang" class="form-label floatingInput">Stok Barang:</label>
    </div>
    <div class="mb-3 form-floating">
        <input type='text' class="form-control" id="harga_barang" rows="3" name='harga_barang' value='<?= $product['harga_barang'] ?>'></input>
        <label for="harga_barang" class="form-label floatingInput">Harga Barang:</label>
    </div>


    <div class="mb-3">
        <div class="div">
            <img src="" class="img-thumbnail d-inline" style='width: 50px;'>
            <caption>*gk ada gambar</caption>
            <input class="form-control col-2" type="file" id="formFile" name='gambar'>
        </div>
    </div>

    <div class="modal-footer">
        <input type="submit" class="btn btn-secondary" value='Tambah'></input>
    </div>
</form>