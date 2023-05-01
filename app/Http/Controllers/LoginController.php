<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('auth.LoginPage');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/welcome');
        }
        return redirect('/');
    }
}