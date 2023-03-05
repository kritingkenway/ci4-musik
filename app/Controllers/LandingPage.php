<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
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
