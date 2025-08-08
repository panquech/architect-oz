<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');

Route::view('/contact', 'contact');
Route::view('/trayectoria', 'about')->name('about');