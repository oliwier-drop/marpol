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
Route::get('/produkty/kartony-fasonowe', function () {
    return view('products.custom_cartons');
});
Route::get('/produkty/tektury', function () {
    return view('products.papers');
});
Route::get('/produkty/wypelniacze', function () {
    return view('products.filling');
});

Route::get('/polityka-prywatnosci', function () {
    return view('privacy');
});
Route::view('/kontakt', 'contacts')->name('contact.show');
Route::post('/kontakt', [ContactController::class, 'submit'])->name('contact.submit');