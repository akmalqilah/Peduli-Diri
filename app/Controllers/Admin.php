<?php

namespace App\Controllers;

use App\Models\DatausersModel;

class Admin extends BaseController
{
    protected $datamodel;
    public function __construct()
    {
        $this->datamodel = new DatausersModel();
    }
    public function index()
    {
        $listuser = $this->datamodel->findAll();

        $data = [
            'title' => 'Home',
            'listuser' => $listuser
        ];
        return view('admin/index', $data);
    }
    public function datauser()
    {
        $listuser = $this->datamodel->findAll();
        $data = [
            'title' => 'Daftar User',
            'listuser' => $listuser
        ];
        return view('admin/daftaruser', $data);
    }

    public function detail($id)
    {
        $listuser = $this->datamodel->where(['id' => $id])->first();
        $data = [
            'title' => 'Detail User',
            'listuser' => $listuser
        ];
        return view('admin/detail', $data);
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        return view('admin/profil', $data);
    }

    public function edit($user_id)
    {
        $listuser = $this->datamodel->where(['id' => $user_id])->first();
        $data = [
            'title' => 'Edit User',
            'listuser' => $listuser
        ];
        return view('admin/edit', $data);
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
        return redirect()->to('admin/profile');
    }

    public function delete($id)
    {
        $this->datamodel->delete($id);
        return redirect()->to('/admin/datauser');
    }
}
