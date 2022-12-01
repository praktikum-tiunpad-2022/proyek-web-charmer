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
    
    /*public function faqs()
    {
        return view('pages/faqs');
    }*/
}