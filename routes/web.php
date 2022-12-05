<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login', [AccountController::class, 'authenticate']);
Route::get('/login', [AccountController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logout', [AccountController::class,'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/rooms'    , [RoomController::class,    'index']);
Route::get('/pesan-kamar', function()
{
    return view('pesankamar');     
});  

Route::get('/transaksi', function()
{
    return view('transaksi');     
});    

Route::get('/about-us', function()
{
    return view('about_us');
});


