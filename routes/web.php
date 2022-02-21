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
    return "Selamat Datang";
    });

    Route::get('/about', function () {
       return "Nim : 2041720003, Nama : Sindy Alvina Khoiriyah, Kelas : TI 2D";
    });

    Route::get('/articles/{id}', function($id){
       return "Halaman Artikel dengan ID ".$id;
    });
