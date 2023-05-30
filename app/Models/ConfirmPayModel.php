<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfirmPayModel extends Model
{
    protected $table = 'tbl_pembayaran';

    protected $primaryKey = 'id_pembayaran';



    protected $allowedFields = [
        'id_transaksi',
        'username',
        'nama_rekening',
        'tanggal_pembayaran',
        'bank',
        'gambar'
    ];
}
