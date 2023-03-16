<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JacaresController;

Route::get('/jacares/lista', [JacaresController::class, 'index'])->name('jacare.index');

Route::get('/', [JacaresController::class, 'home'])->name('jacare.home');

Route::get('/jacares/novo', [JacaresController::class, 'create'])->name('jacare.create');
Route::post('/jacares', [JacaresController::class, 'store'])->name('jacare.store');

