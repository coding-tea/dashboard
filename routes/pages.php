<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function ($id) {
    return "hello world";
});