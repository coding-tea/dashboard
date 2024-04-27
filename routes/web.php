<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/c', function () {
    return view('pages.components');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::any('{catchall}', function(){
    return view("layouts.404");
})->where('catchall', '.*');