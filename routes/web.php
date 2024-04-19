<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/c', function () {
    return view('pages.components');
});


Route::any('{catchall}', function(){
    return view("layouts.404");
})->where('catchall', '.*');