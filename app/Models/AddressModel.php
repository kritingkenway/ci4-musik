<?php

namespace App\Models;

use CodeIgniter\Model;

class AddressModel extends Model
{
    protected $table = 'tbl_alamat';

    protected $primaryKey = 'id_alamat';


    protected $allowedFields = [
        'nama_depan',
        'nama_belakang',
        'alamat',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
        'no_telp',
        'id_user'
    ];
}
