<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Resource route untuk ProdukController
Route::resource('produk', ProdukController::class);
