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
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[32]|validateUser[email,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or password don\'t match'
                ]
            ];

            if(!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
            }else {
                $model = new UserModel();

                $user = $model->where('email',$this->request->getVar('email'))->first();
                $this->setUserSession($user);
                session()->setFlashData('success','Login Success!');
                return redirect()->to('dashboard');
            }
        }
        return view('login',$data);
    }

    private function setUserSession($user) {
        $data = [
            'email' => $user['email'],
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
                'nama_adm' => 'required|min_length[6]|max_length[50]|',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[admin.email]',
                'password' => 'required|min_length[8]|max_length[32]',
                'password_confirm' => 'matches[password]',
            ];
            if(!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else {
                $model = new UserModel();

                $data = [
                    'nama_adm' => $this->request->getVar('nama_adm'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($data);
                session()->setFlashData('success','Register Success!');
                return redirect()->to('/admin');
            }
        }
        return view('register',$data);
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/admin');
    }
}