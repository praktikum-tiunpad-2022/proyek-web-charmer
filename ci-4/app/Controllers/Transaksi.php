<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaksi as TransaksiModel;
use App\Models\Cart as CartModel;

class Transaksi extends BaseController
{
    public function index()
    {
        $model  = new TransaksiModel();
        $data   = [
            'Transaksi' => $model->getTransaksi(),
        ];
        return view('Transaksi', $data);
    }

    public function create2() {
        return view('add');
    }

    public function save2() {
        $model  = new TransaksiModel();
        $data   = [
            'total_transaksi' => $this->request->getPost('total_transaksi'), 
            'tgl_transaksi' => $this->request->getPost('tgl_transaksi'), 
            'norek_buyer' => $this->request->getPost('norek_buyer'), 
            'namarek_buyer' => $this->request->getPost('namarek_buyer'), 
            'bank_buyer' => $this->request->getPost('bank_buyer'),
            'id_buyer' => $this->request->getPost('id_buyer'),
            'nama_buyer' => $this->request->getPost('nama_buyer'),
            'alamat_buyer' => $this->request->getPost('alamat_buyer'),
            'telp_buyer' => $this->request->getPost('telp_buyer'),
            'order' => $this->request->getPost('order'),
        ];
        $model->saveTransaksi($data);
        return redirect()->to('/transaksi');
    }

    public function edit2($id_transaksi) {
        $model  = new TransaksiModel();
        $data   = [
            'Transaksi' => $model->getTransaksi($id_transaksi),
        ];
        return view('edit',$data);
    }
    
    public function update2($id_transaksi) {
        $model  = new TransaksiModel();
        $data   = [
            'total_transaksi' => $this->request->getPost('total_transaksi'), 
            'tgl_transaksi' => $this->request->getPost('tgl_transaksi'), 
            'norek_buyer' => $this->request->getPost('norek_buyer'), 
            'namarek_buyer' => $this->request->getPost('namarek_buyer'), 
            'bank_buyer' => $this->request->getPost('bank_buyer'),
            'id_buyer' => $this->request->getPost('id_buyer'),
            'nama_buyer' => $this->request->getPost('nama_buyer'),
            'alamat_buyer' => $this->request->getPost('alamat_buyer'),
            'telp_buyer' => $this->request->getPost('telp_buyer'),
            'order' => $this->request->getPost('order'),
        ];
        $model->updateTransaksi($id_transaksi, $data);
        return redirect()->to('/transaksi');
    }

    public function delete2($id_transaksi) {
        $model  = new TransaksiModel();
        $model->deleteTransaksi($id_transaksi);
        return redirect()->to('/transaksi');
    }

    public function detail($id_transaksi) {
        $model  = new CartModel();
        $data   = [
            'Cart' => $model->getCart1($id_transaksi),
        ];
        return view('Detail', $data);
    }
}