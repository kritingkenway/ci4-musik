<?php

namespace App\Controllers;

use SebastianBergmann\Type\NullType;

class Auth extends BaseController
{
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Log in'
    //     ];
    //     return view('login', $data);
    // }

    public function login()
    {
        // dd($this->request->getVar());
        if (isset($_POST['login'])) {

            return $this->doLogin();
        } else {
            $data = [
                'title' => 'Log in'
            ];
            return view('login2', $data);
        }
    }

    public function register()
    {
        session();
        // dd($this->request->getVar());
        if (isset($_POST['register'])) {

            return $this->doRegister();
        } else {
            $data = [
                'title' => 'Register',
                'validation' => $this->validator
            ];
            return view('register', $data);
        }
    }

    protected function doLogin()
    {
        $row = $this->userModel
            ->getWhere([
                'nama_user' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
            ])
            ->getRow();
        // dd($row->id_user);
        if ($row != NULL) {
            $data = [
                'id_user' => $row->id_user,
                'nama_user' => $row->nama_user,
                'logged-in' => true,
                'shopping-cart' => []
            ];

            session()->set($data);
            return redirect()->to('/');
        } else {
            session()->setFlashdata('msg', 'Login Gagal, Username/Password salah!');
            return redirect()->to('/login');
        }
        session()->setFlashdata('msg', 'Login Gagal, Username/Password salah!');
        return redirect()->to('/login');
    }


    protected function doRegister()
    {

        if (!$this->validate([
            'username' => 'required|is_unique[tbl_user.nama_user]|max_length[15]',
            'password' => 'required|min_length[8]',
            'passcnf' => 'required|matches[password]',
            // 'email' => 'required|valid_email',
        ])) {

            return view('/register', ['title' => 'Error register', 'validation' => $this->validator]);
        }


        $data = [
            'nama_user' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            // 'email' => $this->request->getVar('email'),
            // 'nama' => $this->request->getVar('nama'),
        ];

        $this->userModel->save($data);
        return redirect()->to('/login')->with('success', 'Akun berhasil dibuat silahkan Login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
