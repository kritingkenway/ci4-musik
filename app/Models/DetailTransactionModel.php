<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailTransactionModel extends Model
{
    protected $table = 'tbl_detailtransaksi';

    protected $primaryKey = 'id_detail';
    protected $allowedFields = [
        'id_transaksi',
        'id_barang',
        'jumlah_barang'
    ];
}
