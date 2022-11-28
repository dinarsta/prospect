<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddprospectController;
use App\Http\Controllers\PresensiController;

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

Route::get('/prospect',[AddprospectController::class,'index'])->name('prospect')->middleware('auth');
// add prospect
Route::get('/tambahprospect', [AddprospectController::class, 'tambahprospect'])->name('tambahprospect');
Route::post('/insertpros', [AddprospectController::class, 'insertpros'])->name('insertpros');
// edit prospect
Route::get('/tampilpros/{id}', [AddprospectController::class, 'tampilpros'])->name('tampilpros');
Route::post('/updatepros/{id}', [AddprospectController::class, 'updatepros'])->name('updatepros');
// delete rospectp
Route::get('/delete/{id}', [AddprospectController::class, 'delete'])->name('delete');
// login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
// register
Route::get('/register', [LoginController::class,'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// presensi
Route::get('masuk', [PresensiController::class, 'index'])->name('masuk');
Route::post('simpan-masuk', [PresensiController::class, 'store'])->name('simpan-masuk');

route::get('/keluar', [PresensiController::class, 'keluar'])->name('keluar');
Route::post('ubah-presensi', [PresensiController::class, 'presensipulang'])->name('ubah-presensi');
Route::get('filter-data', [PresensiController::class, 'halamanrekap'])->name('filter-data');
Route::get('filter-data/{tglawal}/{tglakhir}', [PresensiController::class, 'tampildatakeseluruhan'])->name('filter-data-keseluruhan');
// Route::resource('presensi', PresensiController::class);