<?php

namespace App\Controllers;

// use CodeIgniter\I18n\Time;

class LandingPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            // 'time' => Time::now('Asia/Jakarta')->format('Y-m-d')
        ];
        // dd(session()->get('id_user'));
        return view('home', $data);
    }

    public function collection()
    {

        $data = [
            'title' => 'Daftar Barang',
            'collection' => $this->productModel->findAll()
        ];

        return view('collection', $data);
    }

    public function product_detail($id)
    {



        $data = [
            'title' => 'Detail Produk',
            'produk' => $this->productModel->find($id)
        ];

        return view('detail_produk', $data);
    }
}
