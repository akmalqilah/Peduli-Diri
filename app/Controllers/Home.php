<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function Login()
    {
        return view('auth/login');
    }
    // public function Register()
    // {
    //     return view('auth/register');
    // }
    // public function user()
    // {
    //     return view('user/index');
    // }
}
