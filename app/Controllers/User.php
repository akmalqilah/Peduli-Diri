<?php

namespace App\Controllers;

class User extends BaseController
{
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
    public function isidata()
    {
        return view('user/isidata');
    }
    public function catatan()
    {
        return view('user/catatan');
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