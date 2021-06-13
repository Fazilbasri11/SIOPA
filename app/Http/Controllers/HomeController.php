<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function satu()
    {
        return view('halaman.satu');
    }

    public function dua()
    {
        return view('halaman.dua');
    }
}
