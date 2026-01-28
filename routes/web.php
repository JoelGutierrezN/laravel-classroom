<?php

use App\Http\Controllers\ApartmentController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('test');
//});

//Route::view('/', 'welcome')
//    ->name('home');

Route::redirect('/', '/apartments', 301)->name('home');

Route::get('/apartments', [ApartmentController::class, 'index'])
    ->name('apartments.index');

Route::get('/apartments/crear', [ApartmentController::class, 'create'])
    ->name('apartments.create');

Route::post('/apartments', [ApartmentController::class, 'store'])
    ->name('apartments.store');



Route::view('/contacto', 'test')
    ->name('test');

Route::view('/about', 'about')
    ->name('about');
