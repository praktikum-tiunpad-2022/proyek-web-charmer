<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Barang as BarangModel;
use App\Models\Kategori as KategoriModel;

class Barang extends BaseController
{
    protected $helpers = ['barang'];

    function __construct()
    {
        $this->barang = new BarangModel();
        $this->kategori = new KategoriModel();
    }
    
    public function index()
    {
        $data   = [
            'Barang' => $this->barang->getAll(),
        ];
        return view('Barang', $data);
    }

    public function create() {
        $data = [
            'Kategori' => $this->kategori->getKategori(),
        ];
        return view('add', $data);
    }

    public function save() {
        $data   = [
            'nama_brg' => $this->request->getPost('nama_brg'), 
            'nama_artis' => $this->request->getPost('nama_artis'), 
            'harga_brg' => $this->request->getPost('harga_brg'), 
            'stok_brg' => $this->request->getPost('stok_brg'), 
            'img_brg' => $this->request->getPost('img_brg'),
            'id_kategori' => $this->request->getPost('id_kategori'),
        ];
        $this->barang->saveBarang($data);
        return redirect()->to('/barang');
    }

    public function edit($id_brg) {
        $data   = [
            'Kategori' => $this->kategori->getKategori(),
            'Barang' => $this->barang->getBarang($id_brg),
        ];
        return view('edit',$data);
    }
    
    public function update($id_brg) {
        $data   = [
            'nama_brg' => $this->request->getPost('nama_brg'), 
            'nama_artis' => $this->request->getPost('nama_artis'), 
            'harga_brg' => $this->request->getPost('harga_brg'), 
            'stok_brg' => $this->request->getPost('stok_brg'), 
            'img_brg' => $this->request->getPost('img_brg'),
            'id_kategori' => $this->request->getPost('id_kategori'),
        ];
        $this->barang->updateBarang($id_brg, $data);
        return redirect()->to('/barang');
    }

    public function delete($id_brg) {
        $this->barang->deleteBarang($id_brg);
        return redirect()->to('/barang');
    }
}