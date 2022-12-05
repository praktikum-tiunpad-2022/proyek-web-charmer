<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buyer as BuyerModel;

class Buyer extends BaseController
{
    public function index()
    {
        $model  = new BuyerModel();
        $data   = [
            'Buyer' => $model->getBuyer(),
        ];
        return view('Buyer', $data);
    }

    public function create() {
        return view('add');
    }

    public function save() {
        $model  = new BuyerModel();
        $data   = [
            'usn_buyer' => $this->request->getPost('usn_buyer'), 
            'pass_buyer' => $this->request->getPost('pass_buyer'), 
            'tgl_akun_buyer' => $this->request->getPost('tgl_akun_buyer'), 
        ];
        $model->saveBuyer($data);
        return redirect()->to('/buyer');
    }

    public function edit($id_buyer) {
        $model  = new BuyerModel();
        $data   = [
            'Buyer' => $model->getBuyer($id_buyer),
        ];
        return view('edit_buyer',$data);
    }
    
    public function update($id_buyer) {
        $model  = new BuyerModel();
        $data   = [
            'usn_buyer' => $this->request->getPost('usn_buyer'), 
            'pass_buyer' => $this->request->getPost('pass_buyer'), 
            'tgl_akun_buyer' => $this->request->getPost('tgl_akun_buyer'), 
        ];
        $model->updateBuyer($id_buyer, $data);
        return redirect()->to('/buyer');
    }

    public function delete($id_buyer) {
        $model  = new BuyerModel();
        $model->deleteBuyer($id_buyer);
        return redirect()->to('/buyer');
    }
}