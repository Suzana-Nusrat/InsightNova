<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');