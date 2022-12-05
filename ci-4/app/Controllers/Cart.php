<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Cart as CartModel;

class Cart extends BaseController
{
    public function index()
    {
        $model  = new CartModel();
        $data   = [
            'Cart' => $model->getCart(),
        ];
        return view('Cart', $data);
    }

    public function create() {
        return view('add');
    }

    public function save() {
        $model  = new CartModel();
        $data   = [
            'nama_brg' => $this->request->getPost('nama_brg'), 
            'nama_artis' => $this->request->getPost('nama_artis'), 
            'harga_brg' => $this->request->getPost('harga_brg'), 
            'qyt_brg' => $this->request->getPost('qyt_brg'), 
            'img_brg' => $this->request->getPost('img_brg'),
            'id_buyer' => $this->request->getPost('id_buyer'),
            'id_brg' => $this->request->getPost('id_brg'),
            'status' => $this->request->getPost('status'),
            'id_transaksi' => $this->request->getPost('id_transaksi'),
        ];
        $model->saveCart($data);
        return redirect()->to('/cart');
    }

    public function edit($id_cart) {
        $model  = new CartModel();
        $data   = [
            'Cart' => $model->getCart($id_cart),
        ];
        return view('edit_cart',$data);
    }
    
    public function update($id_cart) {
        $model  = new CartModel();
        $data   = [
            'nama_brg' => $this->request->getPost('nama_brg'), 
            'nama_artis' => $this->request->getPost('nama_artis'), 
            'harga_brg' => $this->request->getPost('harga_brg'), 
            'qyt_brg' => $this->request->getPost('qyt_brg'), 
            'img_brg' => $this->request->getPost('img_brg'),
            'id_buyer' => $this->request->getPost('id_buyer'),
            'id_brg' => $this->request->getPost('id_brg'),
            'status' => $this->request->getPost('status'),
            'id_transaksi' => $this->request->getPost('id_transaksi'),
        ];
        $model->updateCart($id_cart, $data);
        return redirect()->to('/cart');
    }

    public function delete($id_cart) {
        $model  = new CartModel();
        $model->deleteCart($id_cart);
        return redirect()->to('/cart');
    }
}