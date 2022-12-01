<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori extends Model
{
    protected $table            = 'kategori';
    protected $primaryKey       = 'id_kategori';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_kategori'
    ];

    public function getKategori($id_kategori = false){
        if($id_kategori == false) {
            return $this->findAll();
        } else {
            return $this->where('id_kategori',$id_kategori)->first();
        }
    }

    public function saveKategori($data) {
        return $this->insert($data);
    }

    public function updateKategori($id_kategori, $data) {
        return $this->update($id_kategori, $data);
    }

    public function deleteKategori($id_kategori) {
        return $this->delete($id_kategori);
    }
}