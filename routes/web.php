<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/sign', function(){
    return view('sign');
});
