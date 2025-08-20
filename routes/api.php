<?php

use App\Http\Controllers\ParkController;
use Illuminate\Support\Facades\Route;

Route::patch('/faculties/{id}/update', [ParkController::class, 'update'])->name('update');
Route::post('/tambah', [ParkController::class, 'add'])->name('add');
Route::get('/faculties/{id}/update', [ParkController::class, 'obtain'])->name('obtain');