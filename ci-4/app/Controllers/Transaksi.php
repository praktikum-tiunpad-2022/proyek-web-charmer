<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaksi as TransaksiModel;
use App\Models\Cart as CartModel;

class Transaksi extends BaseController
{
    protected $helpers = ['transaksi'];

    function __construct()
    {
        $this->transaksi = new TransaksiModel();
        $this->cart = new CartModel();
    }

    public function index()
    {
        $data   = [
            'Transaksi' => $this->transaksi->getTransaksi(),
            'Cart' => $this->cart->getCart1(),
        ];
        return view('Transaksi', $data);
    }

    public function home()
    {
        $data   = [
            'Transaksi' => $this->transaksi->getTransaksi(),
        ];
        return view('Dashboard', $data);
    }

    public function detail($id_transaksi) {
        $data   = [
            'Transaksi' => $this->transaksi->getTransaksi($id_transaksi),
            'Cart' => $this->cart->getAll(),
        ];
        return view('Detail', $data);
    }

    public function create2() {
        return view('add');
    }

    public function save2() {
        $this->transaksi  = new TransaksiModel();
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
        $this->transaksi->saveTransaksi($data);
        return redirect()->to('/transaksi');
    }

    public function edit2($id_transaksi) {
        $this->transaksi  = new TransaksiModel();
        $data   = [
            'Transaksi' => $this->transaksi->getTransaksi($id_transaksi),
        ];
        return view('edit',$data);
    }
    
    public function update2($id_transaksi) {
        $this->transaksi  = new TransaksiModel();
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
        $this->transaksi->updateTransaksi($id_transaksi, $data);
        return redirect()->to('/transaksi');
    }

    public function delete2($id_transaksi) {
        $this->transaksi  = new TransaksiModel();
        $this->transaksi->deleteTransaksi($id_transaksi);
        return redirect()->to('/transaksi');
    }
}