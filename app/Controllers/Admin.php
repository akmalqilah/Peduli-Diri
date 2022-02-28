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
        $data['title'] = 'Home';
        return view('admin/home', $data);
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
    public function delete($id)
    {
        $this->datamodel->delete($id);
        return redirect()->to('/admin/datauser');
    }
}
