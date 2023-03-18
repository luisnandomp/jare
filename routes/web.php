<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JacaresController;

Route::get('/', [JacaresController::class, 'home'])->name('jacare.home');

Route::get('/jacares/lista', [JacaresController::class, 'index'])->name('jacare.index');

Route::get('/jacares/novo', [JacaresController::class, 'create'])->name('jacare.create');
Route::post('/jacares', [JacaresController::class, 'store'])->name('jacare.store');
Route::get('/jacares/{jacare}', [JacaresController::class, 'show'])->name('jacare.show');
Route::put('/jacares/{id}', [JacaresController::class, 'update'])->name('jacare.update');
Route::delete('jacares/{id}',[JacaresController::class, 'destroy'])->name('vagas.destroy');
