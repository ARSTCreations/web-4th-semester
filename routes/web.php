<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/login-pegawai');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login-pegawai');
});
Route::get('/admin', function () {
    return view('login-admin');
});
Route::get('/dashboard', function () {
    return redirect('/api/stable/dashboard');
});
Route::get('/profile', function () {
    return redirect('/api/stable/profile');
});
Route::get('/permohonan_surat', function () {
    return redirect('/api/stable/permohonan_surat');
});
Route::get('/presensi', function () {
    return redirect('/api/stable/presensi');
});
Route::get('/agenda', function () {
    return redirect('/api/stable/agenda');
});