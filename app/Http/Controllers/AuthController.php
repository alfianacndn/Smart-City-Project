<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('Login1.login');
    }

    public function postLogin(Request $request)
    {
        dd('login ok');
    }

    public function getRegister()
    {
        return view('Login1.register');
    }

    public function postRegister(Request $request)
    {
        return  User::create([
            'name' => request('name'),
            'email ' => request('email'),
            'password' => request('password')
        ]);
    }
}
