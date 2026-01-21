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
| ROOT → ARAHKAN KE LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/login');
});

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

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| RESOURCE CRUD
|--------------------------------------------------------------------------
*/

Route::resource('users', UserController::class)->middleware('auth');
Route::resource('produk', ProdukController::class)->middleware('auth');
Route::resource('mesin', MesinController::class)->middleware('auth');

/*
|--------------------------------------------------------------------------
| JADWAL PRODUKSI
|--------------------------------------------------------------------------
*/

Route::resource('jadwal_produksi', ProductionScheduleController::class);
Route::get('/jadwal_produksi', ProductionScheduleController::class, 'index')->name('jadwal_produksi.index');
Route::get('/jadwal_produksi/create', ProductionScheduleController::class, 'create')->name('jadwal_produksi.create');
Route::post('/jadwal_produksi', ProductionScheduleController::class, 'store')->name('jadwal_produksi.store');

/*
|--------------------------------------------------------------------------
| MONITORING PRODUKSI
|--------------------------------------------------------------------------
*/

Route::resource('monitoring', ProductionMonitoringController::class);