<?php 

namespace App\Controllers;

class Admin extends BaseController 
{
    public function barang()
    {
        return view('Barang');
    }

    public function transaksi()
    {
        return view('Transaksi');
    }
    
    public function kategori()
    {
        return view('Kategori');
    }
}