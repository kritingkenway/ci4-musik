<?php

namespace App\Controllers;

// use CodeIgniter\I18n\Time;

class ConfirmPay extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Konfirmasi Pembayaran',

        ];

        return view('konfirmasi1', $data);
    }

    public function input()
    {
        $row = $this->transactionModel
            ->getWhere([
                'id_transaksi' => $this->request->getVar('id_transaksi'),
            ])
            ->getRow();
        if ($row != NULL) {

            $file = $this->request->getFile('gambar');

            if ($file->isValid() && !$file->hasMoved()) {

                $data = [
                    'id_transaksi' => $this->request->getVar('id_transaksi'),
                    'username' => $this->request->getVar('username'),
                    'nama_rekening' => $this->request->getVar('nama_rekening'),
                    'tanggal_pembayaran' => $this->request->getVar('date'),
                    'bank' => $this->request->getVar('bank'),
                    'gambar' => $file->getName('gambar'),
                ];

                $this->confirmPayModel->insert($data);
                return redirect('/')->with('succ', 'Penginputan Bukti Pembayaran Berhasil, Harap Tunggu Konfirmasi');
            } else {
                return redirect('/konfirmasi-pembayaran')->with('err', 'Penginputan harus beserta Bukti Pembayaran');
            }
        } else {
            return redirect('/konfirmasi-pembayaran')->with('err', 'Tidak ada Transaksi Berdasarkan Kode Transaksi yang diInput');
        }
    }
}
