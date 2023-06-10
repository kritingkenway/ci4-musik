<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Transaksi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pesanan Ku',
            'transaksi' => $this->transactionModel->where('id_user', session()->get('id_user'))->findAll()

        ];

        return view('history', $data);
    }
}
