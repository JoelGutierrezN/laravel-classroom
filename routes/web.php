<?php

use App\Http\Controllers\ApartmentController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('test');
//});

//Route::view('/', 'welcome')
//    ->name('home');

Route::get('/', [ApartmentController::class, 'index'])->name('home');

Route::view('/contacto', 'test')
    ->name('test');

Route::view('/about', 'about')
    ->name('about');
