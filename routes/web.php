<?php

use App\Http\Controllers\KasirController;

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Middleware\kasirmiddlaware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout',[KasirController::class,'logout']);

Route::get('registrasi',[KasirController::class,'regis']);
Route::post('registrasi',[KasirController::class,'registrasi']);

Route::get('login',[KasirController::class,'login']);
Route::post('login',[KasirController::class,'ceklogin']);

Route::get('layout',[KasirController::class,'layout']);
Route::get('dashboard',[KasirController::class,'dass'])->middleware(kasirmiddlaware::class);


//kasir
Route::get('kasir',[KasirController::class,'kasir']);
Route::get('tambahkasir',[KasirController::class,'tambah']);
Route::post('tambahkasir',[KasirController::class,'tambahkasir']);
Route::get('editkasir/{id}',[KasirController::class,'edit']);
Route::post('editkasir/{id}',[KasirController::class,'editkasir']);
Route::get('hapuskasir/{id}',[KasirController::class,'hapuskasir']);

//produk
Route::get('produk',[ProdukController::class,'produk']);
Route::get('tambahproduk',[ProdukController::class,'tambah']);
Route::post('tambahproduk',[ProdukController::class,'tambahproduk']);
Route::get('editproduk/{id}',[ProdukController::class,'edit']);
Route::post('editproduk/{id}',[ProdukController::class,'editproduk']);
Route::get('hapusproduk/{id}',[ProdukController::class,'hapusproduk']);

//pelanggan
Route::get('pelanggan',[PelangganController::class,'pelanggan']);
Route::get('tambahpelanggan',[PelangganController::class,'tambah']);
Route::post('tambahpelanggan',[PelangganController::class,'tambahpelanggan']);
Route::get('editpelanggan/{id}',[PelangganController::class,'edit']);
Route::post('editpelanggan/{id}',[PelangganController::class,'editpelanggan']);
Route::get('hapuspelanggan/{id}',[PelangganController::class,'hapuspelanggan']);

//teransaksi
Route::get('transaksi',[PenjualanController::class,'transaksi']);