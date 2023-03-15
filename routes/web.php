<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JacareController;

Route::get('/', [JacareController::class, 'create'])->name('jacare.home');

Route::get('/jacare/novo', [JacareController::class, 'create'])->name('jacare.create');
