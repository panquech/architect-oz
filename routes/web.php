<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('/contact', 'contact');
Route::view('/trayectoria', 'about')->name('about');