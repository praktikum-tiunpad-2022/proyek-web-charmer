<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Barang as BarangModel;

class Barang extends BaseController
{
    public function index()
    {
        $model  = new BarangModel();
        $data   = [
            'Barang' => $model->getBarang(),
        ];
        return view('Barang', $data);
    }

    public function create() {
        return view('add');
    }

    public function save() {
        $model  = new BarangModel();
        $data   = [
            'nama_brg' => $this->request->getPost('nama_brg'), 
            'nama_artis' => $this->request->getPost('nama_artis'), 
            'harga_brg' => $this->request->getPost('harga_brg'), 
            'stok_brg' => $this->request->getPost('stok_brg'), 
            'img_brg' => $this->request->getPost('img_brg'),
            'id_kategori' => $this->request->getPost('id_kategori'),
        ];
        $model->saveBarang($data);
        return redirect()->to('Barang');
    }

    public function edit($id_brg) {
        $model  = new BarangModel();
        $data   = [
            'Barang' => $model->getBarang($id_brg),
        ];
        return view('edit',$data);
    }
    
    public function update($id_brg) {
        $model  = new BarangModel();
        $data   = [
            'nama_brg' => $this->request->getPost('nama_brg'), 
            'nama_artis' => $this->request->getPost('nama_artis'), 
            'harga_brg' => $this->request->getPost('harga_brg'), 
            'stok_brg' => $this->request->getPost('stok_brg'), 
            'img_brg' => $this->request->getPost('img_brg'),
            'id_kategori' => $this->request->getPost('id_kategori'),
        ];
        $model->updateBarang($id_brg, $data);
        return redirect()->to('Barang');
    }

    public function delete($id_brg) {
        $model  = new BarangModel();
        $model->deleteBarang($id_brg);
        return redirect()->to('Barang');
    }
}