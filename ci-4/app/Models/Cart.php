<?php

namespace App\Models;

use CodeIgniter\Model;

class Cart extends Model
{
    protected $table            = 'cart';
    protected $primaryKey       = 'id_cart';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_brg', 'nama_artis', 'harga_brg', 'qyt_brg', 'img_brg', 'id_buyer', 'id_brg',
        'status', 'id_transaksi'
    ];

    public function getCart($id_cart = false){
        if($id_cart == false) {
            return $this->findAll();
        } else {
            return $this->where('id_cart',$id_cart)->first();
        }
    }

    public function getCart1($id_transaksi = false){
        if($id_transaksi == false) {
            return $this->findAll();
        } else {
            return $this->where('id_transaksi',$id_transaksi)->first();
        }
    }

    public function saveCart($data) {
        return $this->insert($data);
    }

    public function updateCart($id_cart, $data) {
        return $this->update($id_cart, $data);
    }

    public function deleteCart($id_cart) {
        return $this->delete($id_cart);
    }
}