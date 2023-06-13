<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class Checkout extends BaseController
{
    public function checkout()
    {
        if (isset($_POST['orders'])) {
            return $this->makeOrder();
        } else {
            $data = [
                'title' => 'Checkout',
                'total' => $this->total(),
                'alamat' => $this->addressModel->where('id_user', session()->get('id_user'))->findAll(),
                'items' => session()->get('shopping-cart')
            ];
            return view('checkout', $data);
        }
    }

    protected function makeOrder()
    {

        // melakukan input alamat terlebih dahulu
        $id_alamat = '';
        if ($this->request->getVar('id_alamat') == '0') {
            // jika bikin alamat baru
            $data = [
                'nama_depan' => $this->request->getVar('nama_depan'),
                'nama_belakang' => $this->request->getVar('nama_belakang'),
                'alamat' => $this->request->getVar('alamat'),
                'kecamatan' => $this->request->getVar('kecamatan'),
                'kota' => $this->request->getVar('kota'),
                'provinsi' => $this->request->getVar('provinsi'),
                'kode_pos' => $this->request->getVar('kode_pos'),
                'no_telp' => $this->request->getVar('no_telp'),
                'id_user' => session()->get('id_user')
            ];
            $this->addressModel->insert($data);

            $id_alamat = $this->addressModel->select('id_alamat')
                ->where('id_user', session()->get('id_user'))
                ->orderBy('id_alamat', 'DESC')
                ->get()
                ->getRowArray();
        } else {
            $id_alamat = $this->request->getVar('id_alamat');
        }

        //dilanjutkan dengan menginput data transaksi
        $id_transaksi = 'P' . random_string('numeric', 4);
        $transaksi = [
            'id_transaksi' => $id_transaksi,
            'tanggal_transaksi' => Time::now('Asia/Jakarta')->format('Y-m-d-H-i-s'),
            'id_alamat' => $id_alamat,
            'id_user' => session()->get('id_user')
        ];

        $this->transactionModel->insert($transaksi);

        // diakhiri dengan penginputan detail dari transaksi
        $items = array_values(session('shopping-cart'));

        foreach ($items as $i) {
            $data = [
                'id_transaksi' => $id_transaksi,
                'id_barang' => $i['id'],
                'jumlah_barang' => $i['qty']
            ];
            $this->stock($i['id'], $i['qty']);
            $this->detailTransactionModel->insert($data);
        }
        $total = $this->total();
        session()->remove('shopping-cart');
        session()->set('shopping-cart', []);

        $data = [
            'transaksi' =>
            $this->db
                ->table('tbl_detailtransaksi')
                ->join('tbl_barang', 'tbl_barang.id_barang = tbl_detailtransaksi.id_barang', 'left')
                ->where('id_transaksi', $id_transaksi)
                ->get()->getResultArray(),
            'id_transaksi' => $id_transaksi,
            'total' => $total
        ];

        return view('berhasil', $data);
    }


    protected function total()
    {
        $total = 0;
        $items = array_values(session('shopping-cart'));;
        if ($items != null) {
            foreach ($items as $i) {
                $total += $i['harga_barang'] * $i['qty'];
            }
            return $total;
        } else {
            return $total;
        }
    }

    public function stock($id, $qty)
    {
        $stok = $this->productModel->find($id);
        $updatedStock = $stok['stok_barang'] - $qty;

        $data = [
            'id_barang' => $id,
            'stok_barang' => $updatedStock
        ];

        $this->productModel->save($data);
    }

    public function autofill($id_alamat)
    {
        $query = $this->addressModel->find($id_alamat);

        return $query;
    }
}
