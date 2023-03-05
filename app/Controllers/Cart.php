<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        // $data = [
        //     'title' => 'Cart',
        //     'items' => session()->get('shopping-cart'),
        //     'title' => $this->total(),
        // ];
        // return view('cart', $data);
        // session()->remove('shopping-cart');
        $cart = session('shopping-cart');
        dd($cart);
    }

    public function buy($id)
    {
        $product = $this->productModel->find($id);
        $data = [
            'id' => $product['id_barang'],
            'nama_barang' => $product['nama_barang'],
            'harga_barang' => $product['harga_barang'],
            // 'gambar' => $product['gambar'],
            'qty' => 1
        ];


        if (session()->has('shopping-cart')) {
            $cart = session()->get('shopping-cart');
            $index = $this->exists($id);
            if ($index == -1) {
                session()->push('shopping-cart', array($data));
            } else {
                $cart[$this->exists($id)]['qty']++;
                session()->set('shopping-cart', $cart);
            }
        } else {
            session()->set('shopping-cart', array($data));
        }

        return redirect()->back();
    }

    public function remove($id)
    {
        $cart = array_values(session('shopping-cart'));
        $index = $this->exists($id);
        session()->remove($cart[$index]);
        session()->set('shopping-cart', $cart);
        return redirect()->to('/cart');
    }

    protected function update()
    {
        $items = array_values(session('shopping-cart'));

        for ($i = 0; $i < count($items); $i++) {

            $items[$i]['qty'] = $this->request->getVar('qty');
        };
        session()->set('shopping-cart', 'items');
        return redirect()->to('/cart');
    }
    protected function exists($id)
    {
        $items = array_values(session('shopping-cart'));

        for ($i = 0; $i < count($items); $i++) {
            if ($items[$i]['id'] == $id) {
                return $i;
            }
        }
        return -1;
    }
    protected function total()
    {
        $total = 0;
        $items = array_values(session('shopping-cart'));;
        foreach ($items as $i) {
            $total = $items['harga_barang'] * $items['qty'];
        }
        return $total;
    }
}
