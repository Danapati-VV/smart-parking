<?php

use App\Http\Controllers\ParkController;
use Illuminate\Support\Facades\Route;

Route::patch('/faculties/{id}/update', [ParkController::class, 'update'])->name('update');