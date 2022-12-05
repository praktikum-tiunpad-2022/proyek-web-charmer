<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User as UserModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post') {
            $rules = [
                'usn_adm' => 'required|min_length[5]|max_length[50]',
                'password' => 'required|min_length[6]|max_length[32]|validateUser[usn_adm,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Username or password don\'t match'
                ]
            ];

            if(!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
            }else {
                $model = new UserModel();

                $user = $model->where('usn_adm',$this->request->getVar('usn_adm'))->first();
                $this->setUserSession($user);
                session()->setFlashData('success','Login Success!');
                return redirect()->to('barang');
            }
        }
        return view('login',$data);
    }

    private function setUserSession($user) {
        $data = [
            'usn_adm' => $user['usn_adm'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function register(){
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post') {
            $rules = [
                'id_adm' => 'required',
                'nama_adm' => 'required|min_length[5]|max_length[50]',
                'usn_adm' => 'required|min_length[5]|max_length[50]|is_unique[admin.usn_adm]',
                'password' => 'required|min_length[5]|max_length[32]',
                'password_confirm' => 'matches[password]',
            ];
            if(!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else {
                $model = new UserModel();

                $data = [
                    'id_adm' => $this->request->getVar('id_adm'),
                    'nama_adm' => $this->request->getVar('nama_adm'),
                    'usn_adm' => $this->request->getVar('usn_adm'),
                    'pass_adm' => $this->request->getVar('pass_adm'),
                ];
                $model->save($data);
                session()->setFlashData('success','Register Success!');
                return redirect()->to('/');
            }
        }
        return view('register',$data);
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/');
    }
}