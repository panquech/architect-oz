<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ServiceController::class,'index'])->name('index');

Route::get('/trayectoria', [JobController::class,'index'])->name('jobs.index');