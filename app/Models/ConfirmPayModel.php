<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfirmPayModel extends Model
{
    protected $table = 'tbl_pembayaran';

    protected $primaryKey = 'id_pembayaran';

    protected $userTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $allowedFields = [];
}
