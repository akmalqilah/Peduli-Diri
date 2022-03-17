<?php

namespace App\Controllers;

use App\Models\DatausersModel;
use App\Models\CatatanusersModel;

class User extends BaseController
{
    protected $datamodel;
    protected $catatanmodel;
    public function __construct()
    {
        $this->datamodel = new DatausersModel();
        $this->catatanmodel = new CatatanusersModel();
    }

    public function index()
    {
        $data['title'] = 'Home';
        return view('user/index', $data);
    }
    public function profile()
    {
        $data['title'] = 'Profile';
        return view('user/profil', $data);
    }

    public function edit($user_id)
    {
        $listuser = $this->datamodel->where(['id' => $user_id])->first();
        $data = [
            'title' => 'Edit User',
            'listuser' => $listuser
        ];
        return view('user/edit', $data);
    }

    public function editproses($id)
    {
        $this->datamodel->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'password_hash' => $this->request->getVar('password'),
            'user_img' => $this->request->getVar('user_img'),
        ]);
        return redirect()->to('user/profil');
    }

    public function inputcatatan()
    {
        $data['title'] = 'Profile';
        return view('user/inputcatatan', $data);
    }

    public function save()
    {
        $this->catatanmodel->save([

            'user_id' => $this->request->getVar('userid'),
            'tanggal' => $this->request->getVar('tanggal'),
            'waktu' => $this->request->getVar('waktu'),
            'lokasi' => $this->request->getVar('lokasi'),
            'suhu' => $this->request->getVar('suhu'),


        ]);
        return redirect()->to("/user");
    }

    public function catatan($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('catatan');
        $query = $builder->getwhere(['user_id' => $id])->getResult();
        $data = [
            'title' => 'Catatan Data',
            'query' => $query

        ];
        return view('user/catatan', $data);
    }

    public function detail($id)
    {
        $listuser = $this->catatanmodel->where(['id_catatan' => $id])->first();
        $data = [
            'title' => 'Detail User',
            'listuser' => $listuser
        ];
        return view('user/detail', $data);
    }
}

//     public function index()
//     {
//         return view('home');
//     }
//     public function Login()
//     {
//         return view('auth/login');
//     }
// public function Register()
// {
//     return view('auth/register');
// }