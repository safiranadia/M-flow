<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MesinController;

// halaman dashboard (FE temanmu bisa pakai route ini)
Route::get('/dashboard', function () {
    return view('dashboard'); // FE nanti handle tampilan
})->middleware('auth')->name('dashboard');

// Resource routes untuk User (hanya admin bisa akses di controller)
Route::resource('users', UserController::class)->middleware('auth');

// Resource routes untuk Produk
Route::resource('produk', ProdukController::class)->middleware('auth');

// Resource routes untuk Mesin
Route::resource('mesin', MesinController::class)->middleware('auth');
