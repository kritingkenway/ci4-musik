<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'tbl_barang';

    protected $primaryKey = 'id_barang';
    protected $allowedFields = [
        'id_kategori',
        'nama_barang',
        'stok_barang',
        'harga_barang',
        'gambar'

    ];
}
