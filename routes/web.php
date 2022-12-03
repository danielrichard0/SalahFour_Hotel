<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms' ,[RoomController::class, 'index'] );
Route::get('/login', function() {
    return view('login');
});

Route::get('/about-us', function()
{
    return view('about_us');
});
