<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JacareController;

Route::get('/', [JacareController::class, 'create'])->name('jacare.home');

Route::post('/jare', [JacareController::class, 'store'])->name('jacare.store');
