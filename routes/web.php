<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/home', [LoginController::class, 'halamanlogin'])->name('home');

//route::get('/index', [HomeController::class, 'index']);

route::get('/logout', [LoginController::class, 'logout'])->name('logout');

route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('info', function () {
    return view('infolengkap');
});

Route::get('admin', function () {
    return view('admin');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    route::get('/satu', [HomeController::class, 'satu'])->name('satu');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function () {
    route::get('/index', [HomeController::class, 'index']);

    route::get('/dua', [HomeController::class, 'dua'])->name('dua');
});
