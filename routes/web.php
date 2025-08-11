<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ServiceController::class,'index'])->name('index');

Route::get('/trayectoria', [JobController::class,'index'])->name('jobs.index');

Route::get('/contact', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact', [ContactController::class,'send'])->name('contact');