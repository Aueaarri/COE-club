<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/book/reservation', function () {
    return view('my-booking');
})->name('reserve');

Route::get('/book/my-booking', function () {
    return view('my-booking');
})->name('booking');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
