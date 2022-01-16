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
    return view('client.index');
});

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/contact', function () {
    return view('client.contact');
});

Route::get('/jewellery', function () {
    return view('client.jewellery');
});

Route::get('/login', function () {
    return view('client.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/kategori', function () {
return view('admin.kategori');
});

Route::get('/produk', function () {
return view('admin.produk');
});
