<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function login()
    {
        $data = [
            'id' => 1,
            'firstname' => 'raj',
            'lastname' => 'kumar',
            'email' => 'raj@gmail.com',
            'isLoggedIn' => true,
        ];

        session()->set($data);
    }
    public function dashBoard()
    {
        echo 'Welcome To User Dashboard';
    }
}
