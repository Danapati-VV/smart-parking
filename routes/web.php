<?php
use App\Http\Controllers\ParkController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureFacultySelected;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign', [ParkController::class, 'sign'])->name('sign');
Route::post('/sign', [ParkController::class, 'postSign'])->name('post.sign');

Route::middleware(EnsureFacultySelected::class)->group(function () {
    Route::get('/home', [ParkController::class, 'home'])->name('home');
});