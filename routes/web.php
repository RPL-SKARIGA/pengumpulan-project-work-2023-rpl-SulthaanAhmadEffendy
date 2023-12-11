<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
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
    return view('welcome');
})->middleware('auth');





// login register dashboard
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//  barang

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}/update', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{id}/delete', [BarangController::class, 'destroy'])->name('barang.delete');
Route::get('/barang/search', [BarangController::class, 'search'])->name('barang.search');

// jenis
Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index');
Route::get('/jenis/create', [JenisController::class, 'create'])->name('jenis.create');
Route::post('/jenis/store', [JenisController::class, 'store'])->name('jenis.store');
Route::get('/jenis/{id}/edit', [JenisController::class, 'edit'])->name('jenis.edit');
Route::put('/jenis/{id}/update', [JenisController::class, 'update'])->name('jenis.update');
Route::delete('/jenis/{id}/delete', [JenisController::class, 'destroy'])->name('jenis.delete');
