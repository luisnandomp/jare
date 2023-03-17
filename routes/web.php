<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JacaresController;

Route::get('/', [JacaresController::class, 'home'])->name('jacare.home');

Route::get('/jacares/lista', [JacaresController::class, 'index'])->name('jacare.index');

Route::get('/jacares/novo', [JacaresController::class, 'create'])->name('jacare.create');
Route::post('/jacares', [JacaresController::class, 'store'])->name('jacare.store');
Route::get('/jacares/show', [JacaresController::class, 'show'])->name('jacare.show');

