<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\admincontroller;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[admincontroller::class, 'index']);
Route::get('/hello',[admincontroller::class, 'hello'])->name('dasboatd');
Route::get('/banner',[admincontroller::class, 'banner'])->name('banner');
Route::get('/produc',[admincontroller::class, 'produc'])->name('produc');
Route::get('/adbanner',[admincontroller::class, 'adbanner'])->name('adbanner');