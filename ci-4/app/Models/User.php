<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'id_adm';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_adm','usn_adm', 'pass_adm'
    ];

    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashPassword'];
    protected $beforeUpdate   = ['hashPassword'];
   
    protected function hashPassword(array $data) {
        if(isset($data['data']['pass_adm'])) {
            $data['data']['pass_adm'] = password_hash($data['data']['pass_adm'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}