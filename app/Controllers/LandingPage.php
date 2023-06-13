<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class LandingPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            // 'time' => Time::now('Asia/Jakarta')->format('Y-m-d-H-i-s')
        ];
        // dd(session()->get('id_user'));
        return view('home', $data);
    }

    public function collection()
    {

        $nama_barang = $this->request->getVar('nama_barang');

        if ($nama_barang) {
            $barang = $this->search($nama_barang);
        } else {
            $barang = $this->productModel->findAll();
        }
        $data = [
            'title' => 'Daftar Barang',
            'collection' => $barang
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
    public function search($nama_barang)
    {

        return $this->db->table('tbl_barang')->like('nama_barang', $nama_barang)->get()->getResultArray();
    }
}
