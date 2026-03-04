<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/o-nas', function () {
    return view('about');
});

Route::get('/produkty', function () {
    return view('products');
});

Route::get('/produkty/kartony-klapowe', function () {
    return view('products.cartons');
});
Route::get('/produkty/tektury', function () {
    return view('products.paper');
});
Route::get('/produkty/wytloczenia', function () {
    return view('products.wrapping');
});

Route::get('/procesy', function () {
    return view('processes');
});
Route::view('/kontakt', 'contacts')->name('contact.show');
Route::post('/kontakt', [ContactController::class, 'submit'])->name('contact.submit');