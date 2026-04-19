<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MinumanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/minuman', [MinumanController::class, 'index'])->name('minuman.index');
Route::get('/minuman/create', [MinumanController::class, 'create'])->name('minuman.create');
Route::post('/minuman/store', [MinumanController::class, 'store'])->name('minuman.store');
Route::get('/minuman/{id}/edit', [MinumanController::class, 'edit'])->name('minuman.edit');
Route::put('/minuman/{id}', [MinumanController::class, 'update'])->name('minuman.update');
Route::delete('/minuman/{id}', [MinumanController::class, 'destroy'])->name('minuman.destroy');