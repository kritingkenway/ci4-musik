<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'tbl_transaksi';

    protected $primaryKey = 'id_transaksi';
    protected $userAutoIncrement = false;



    protected $allowedFields = [
        'id_transaksi',
        'tanggal_transaksi',
        'id_user',
        'id_alamat',

    ];
}
