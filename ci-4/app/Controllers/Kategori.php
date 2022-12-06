<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kategori as KategoriModel;

class Kategori extends BaseController
{
    public function index()
    {
        $model  = new KategoriModel();
        $data   = [
            'Kategori' => $model->getKategori(),
        ];
        return view('Kategori', $data);
    }

    public function create1() {
        return view('add_ktg');
    }

    public function save1() {
        $model  = new KategoriModel();
        $data   = [
            'nama_kategori' => $this->request->getPost('nama_kategori'), 
        ];
        $model->saveKategori($data);
        return redirect()->to('/kategori');
    }

    public function edit1($id_kategori) {
        $model  = new KategoriModel();
        $data   = [
            'Kategori' => $model->getKategori($id_kategori),
        ];
        return view('edit_ktg',$data);
    }
    
    public function update1($id_kategori) {
        $model  = new KategoriModel();
        $data   = [
            'nama_kategori' => $this->request->getPost('nama_kategori'), 
        ];
        $model->updateKategori($id_kategori, $data);
        return redirect()->to('/kategori');
    }

    public function delete1($id_kategori) {
        $model  = new KategoriModel();
        $model->deleteKategori($id_kategori);
        return redirect()->to('/kategori');
    }

    public function product()
    {
        $model  = new KategoriModel();
        $data   = [
            'Kategori' => $model->getKategori(),
        ];
        return view('Add', $data);
    }
}