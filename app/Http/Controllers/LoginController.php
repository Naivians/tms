<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function redirectToAccount(){
        return view('create_account');
    }

    public function redirectToLogin(){
        return view('login');
    }
}
