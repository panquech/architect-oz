<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');

Route::view('/contact', 'contact');
/* Route::view('/trayectoria', 'about')->name('about'); */
Route::get('/trayectoria', [JobController::class,'index'])->name('jobs.index');