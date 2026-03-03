<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/o-nas', function () {
    return view('about');
});

Route::get('/produkty', function () {
    return view('products');
});

Route::get('/kontakt', function () {
    return view('contacts');
});