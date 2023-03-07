<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Produk extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Kelola Produk',
            'products' => $this->productModel->findAll(),
            'categories' => $this->db->table('tbl_kategori')->get()->getResultArray()
        ];

        return view('admin/produk', $data);
    }
    public function create()
    {

        $data = [

            'id_kategori' => $this->request->getVar('id_kategori'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'stok_barang' => $this->request->getVar('stok_barang'),
            'harga_barang' => $this->request->getVar('harga_barang'),


        ];

        $this->productModel->insert($data);
        return redirect()->to('/admin/produk');
    }

    public function editProduk($id)
    {


        $data = [
            'product' => $this->productModel->find($id),
            'categories' => $this->db->table('tbl_kategori')->get()->getResultArray()
        ];

        return view('admin/edit_produk', $data);
    }

    public function update($id)
    {
        $data = [
            'id_barang' => $id,
            'id_kategori' => $this->request->getVar('id_kategori'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'stok_barang' => $this->request->getVar('stok_barang'),
            'harga_barang' => $this->request->getVar('harga_barang'),


        ];

        $this->productModel->save($data);
        return redirect()->to('/admin/produk');
    }

    public function delete($id)
    {
        $this->productModel->delete($id);
        return redirect()->to('/admin/produk');
    }
}
