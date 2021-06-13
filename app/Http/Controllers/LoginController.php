<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('home');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('NPM', 'password'))) {
            return redirect('/index');
        }
        return redirect('/home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }
}
