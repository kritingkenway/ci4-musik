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

            $query = $this->confirmPayModel->where('id_transaksi', $this->request->getVar('id_transaksi'))->first();
            if ($file->isValid() && !$file->hasMoved()) {

                if ($query == NULL) {

                    $data = [
                        'id_transaksi' => $this->request->getVar('id_transaksi'),
                        'username' => $this->request->getVar('username'),
                        'nama_rekening' => $this->request->getVar('nama_rekening'),
                        'tanggal_pembayaran' => $this->request->getVar('date'),
                        'bank' => $this->request->getVar('bank'),
                        'gambar' => $file->getName('gambar'),
                    ];
                    $file->move('uploads/bukti/');
                    $this->confirmPayModel->save($data);
                    return redirect('/')->with('succ', 'Penginputan Bukti Pembayaran Berhasil, Harap Tunggu Konfirmasi');
                } elseif ($query['gambar'] != $file->getName() && $query != NULL) {
                    unlink(FCPATH . 'uploads/bukti/' . $query['gambar']);
                    $data = [
                        'id_pembayaran' => $query['id_pembayaran'],
                        'id_transaksi' => $this->request->getVar('id_transaksi'),
                        'username' => $this->request->getVar('username'),
                        'nama_rekening' => $this->request->getVar('nama_rekening'),
                        'tanggal_pembayaran' => $this->request->getVar('date'),
                        'bank' => $this->request->getVar('bank'),
                        'gambar' => $file->getName('gambar'),
                    ];
                    $file->move('uploads/bukti/');
                    $this->confirmPayModel->save($data);
                    return redirect('/')->with('succ', 'Penginputan Bukti Pembayaran Berhasil, Harap Tunggu Konfirmasi');
                } else {
                    $data = [

                        'id_pembayaran' => $query['id_pembayaran'],
                        'id_transaksi' => $this->request->getVar('id_transaksi'),
                        'username' => $this->request->getVar('username'),
                        'nama_rekening' => $this->request->getVar('nama_rekening'),
                        'tanggal_pembayaran' => $this->request->getVar('date'),
                        'bank' => $this->request->getVar('bank'),
                    ];
                    $this->confirmPayModel->save($data);
                    return redirect('/')->with('succ', 'Penginputan Bukti Pembayaran Berhasil, Harap Tunggu Konfirmasi');
                }
            } elseif (!$file->isValid() && !$file->hasMoved() && $query != NULL) {
                $data = [

                    'id_pembayaran' => $query['id_pembayaran'],
                    'id_transaksi' => $this->request->getVar('id_transaksi'),
                    'username' => $this->request->getVar('username'),
                    'nama_rekening' => $this->request->getVar('nama_rekening'),
                    'tanggal_pembayaran' => $this->request->getVar('date'),
                    'bank' => $this->request->getVar('bank'),
                ];
                $this->confirmPayModel->save($data);
                return redirect('/')->with('succ', 'Penginputan Bukti Pembayaran Berhasil, Harap Tunggu Konfirmasi');
            } else {

                return redirect()->to('/konfirmasi-pembayaran')->with('err', 'Penginputan harus beserta Bukti Pembayaran');
            }
        } else {
            return redirect()->to('/konfirmasi-pembayaran')->with('err', 'Tidak ada Transaksi Berdasarkan Kode Transaksi yang diInput');
        }
    }
}
