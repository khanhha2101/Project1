<?php

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
    return view('welcome');
});

Route::get('/dangnhap', function () {
    return view('dangnhap');
});

Route::get('/dangky', function () {
    return view('dangky');
});

Route::get('/canhan', function () {
    return view('pages.canhan');
});
Route::get('/doimatkhau', function () {
    return view('pages.doimatkhau');
});

Route::get('/giohang', function () {
    return view('pages.giohang');
});