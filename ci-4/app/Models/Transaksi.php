<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id_transaksi';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'total_transaksi', 'tgl_transaksi', 'norek_buyer', 'namarek_buyer', 'bank_buyer', 'id_buyer', 'nama_buyer',
        'alamat_buyer', 'telp_buyer', 'order'
    ];

    public function getTransaksi($id_transaksi = false){
        if($id_transaksi == false) {
            return $this->findAll();
        } else {
            return $this->where('id_transaksi',$id_transaksi)->first();
        }
    }

    public function saveTransaksi($data) {
        return $this->insert($data);
    }

    public function updateTransaksi($id_transaksi, $data) {
        return $this->update($id_transaksi, $data);
    }

    public function deleteTransaksi($id_transaksi) {
        return $this->delete($id_transaksi);
    }

    public function getAll() {
        $builder = $this->db->table('transaksi');
        $builder->select('cart.img_brg, cart.nama_brg, cart.harga_brg');
        $builder->join('cart', 'transaksi.id_transaksi = cart.id_transaksi');
        $query = $builder->get();
        return $query->getResult();
    }
}