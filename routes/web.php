<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\admincontroller;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[admincontroller::class, 'index']);
Route::get('/hello',[admincontroller::class, 'hello'])->name('dasboatd');
Route::get('/banner',[admincontroller::class, 'banner'])->name('banner');
Route::get('/produc',[admincontroller::class, 'produk'])->name('produk');
Route::get('/adbanner',[admincontroller::class, 'adbanner'])->name('adbanner');
Route::get('/adproduk',[admincontroller::class, 'adproduk'])->name('adproduk');
Route::post('/prosesadbanner',[admincontroller::class, 'prosesadbanner'])->name('prosesadbanner');
Route::post('/prosesadproduk',[admincontroller::class, 'prosesadproduk'])->name('prosesadproduk');
Route::get('/banner-edit',[admincontroller::class, 'ambilbanner'])->name('banner-edit');
Route::get('/banner-delete',[admincontroller::class, 'deletbanner'])->name('banner-delete');
Route::post('/banner-update/{id}',[admincontroller::class, 'perosesedit'])->name('banner-update');