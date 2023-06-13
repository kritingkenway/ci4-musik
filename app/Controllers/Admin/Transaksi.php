<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Transaksi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'List Transaksi',
            'transaksi' => $this->db
                ->table('tbl_transaksi')
                ->join('tbl_user', 'tbl_user.id_user = tbl_transaksi.id_user', 'left')
                ->orderBy('tanggal_transaksi', 'DESC')
                ->get()->getResultArray(),

        ];

        return view('admin/transaksi', $data);
    }

    public function detail($id_transaksi)
    {
        $data = [
            'detail_transaksi' => $this->db
                ->table('tbl_transaksi')
                ->select('tbl_transaksi.id_transaksi,tanggal_transaksi,nama_depan,nama_belakang,alamat,kecamatan,kota,provinsi,kode_pos,no_telp')
                ->join('tbl_detailtransaksi', "tbl_detailtransaksi.id_transaksi = tbl_transaksi.id_transaksi", 'left')
                ->join('tbl_alamat', 'tbl_alamat.id_alamat = tbl_transaksi.id_alamat')
                ->where('tbl_transaksi.id_transaksi', $id_transaksi)
                ->get()->getRow(),

            'konfirmasi_pembayaran' => $this->confirmPayModel->where('id_transaksi', $id_transaksi)->first(),
            'detail_barang' => $this->db
                ->table('tbl_detailtransaksi')
                ->join('tbl_barang', 'tbl_detailtransaksi.id_barang = tbl_barang.id_barang')
                ->where('id_transaksi', $id_transaksi)
                ->get()->getResultArray(),
            'total_harga' => $this->total($id_transaksi)
        ];




        return view('admin/detail_transaksi', $data);
    }

    public function total($id)
    {
        $total = 0;
        $query = $this->db
            ->table('tbl_detailtransaksi')
            ->join('tbl_barang', 'tbl_detailtransaksi.id_barang = tbl_barang.id_barang')
            ->where('id_transaksi', $id)
            ->get()->getResultArray();

        foreach ($query as $i) {
            $total += $i['harga_barang'] * $i['jumlah_barang'];
        }

        return $total;
    }
}
