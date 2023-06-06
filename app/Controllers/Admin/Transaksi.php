<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Transaksi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kelola Produk',
            'transaksi' => $this->db
                ->table('tbl_transaksi')
                ->join('tbl_user', 'tbl_user.id_user = tbl_transaksi.id_user', 'left')
                ->get()->getResultArray(),

        ];

        return view('admin/transaksi', $data);
    }
}
