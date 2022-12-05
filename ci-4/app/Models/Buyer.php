<?php

namespace App\Models;

use CodeIgniter\Model;

class Buyer extends Model
{
    protected $table            = 'buyer';
    protected $primaryKey       = 'id_buyer';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'usn_buyer', 'pass_buyer', 'tgl_akun_buyer'
    ];

    public function getBuyer($id_buyer = false){
        if($id_buyer == false) {
            return $this->findAll();
        } else {
            return $this->where('id_buyer',$id_buyer)->first();
        }
    }

    public function saveBuyer($data) {
        return $this->insert($data);
    }

    public function updateBuyer($id_buyer, $data) {
        return $this->update($id_buyer, $data);
    }

    public function deleteBuyer($id_buyer) {
        return $this->delete($id_buyer);
    }
}