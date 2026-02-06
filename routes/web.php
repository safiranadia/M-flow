<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MesinController;
use App\Http\Controllers\ProductionScheduleController;
use App\Http\Controllers\ProductionMonitoringController;

/*
|--------------------------------------------------------------------------
| ROOT → LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => redirect('/login'));

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'login'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [AuthController::class, 'authenticate'])
    ->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', fn () => view('pages.dashboard'))
    ->middleware('auth')
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| CRUD RESOURCES
|--------------------------------------------------------------------------
*/
Route::resource('users', UserController::class)->middleware('auth');
Route::resource('produk', ProdukController::class)->middleware('auth');
Route::middleware('auth')->group(function(){
    Route::resource('mesin', MesinController::class);
});
/*
|--------------------------------------------------------------------------
| JADWAL PRODUKSI (CRUD → resource lengkap)
|--------------------------------------------------------------------------
*/
Route::resource('jadwal_produksi', ProductionScheduleController::class)
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| MONITORING PRODUKSI
|--------------------------------------------------------------------------
*/
Route::resource('monitoring', ProductionMonitoringController::class)
    ->middleware('auth');