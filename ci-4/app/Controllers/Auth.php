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
                'usn_adm' => 'required|min_length[1]|max_length[50]|valid_username',
                'pass_adm' => 'required|min_length[1]|max_length[32]|validateUser[usn_adm,pass_adm]',
            ];
            $errors = [
                'pass_adm' => [
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
                'usn_adm' => 'required|min_length[6]|max_length[50]|valid_username|is_unique[users.usn_adm]',
                'pass_adm' => 'required|min_length[8]|max_length[32]',
                'pass_adm_confirm' => 'matches[pass_adm]',
            ];
            if(!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else {
                $model = new UserModel();

                $data = [
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