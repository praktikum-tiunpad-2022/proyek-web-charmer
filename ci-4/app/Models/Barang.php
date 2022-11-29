<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
    protected $table            = 'barang';
    protected $primaryKey       = 'id_brg';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_brg', 'nama_artis', 'harga_brg', 'stok_brg', 'img_brg', 'id_kategori'
    ];

    public function getBarang($id_brg = false){
        if($id_brg == false) {
            return $this->findAll();
        } else {
            return $this->where('id_brg',$id_brg)->first();
        }
    }

    public function saveBarang($data) {
        return $this->insert($data);
    }

    public function updateBarang($id_brg, $data) {
        return $this->update($id_brg, $data);
    }

    public function deleteBarang($id_brg) {
        return $this->delete($id_brg);
    }
}