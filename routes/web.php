<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/phones', function () {
    return view('phones');
});

Route::get('/tablets', function () {
    return view('tablets');
});

Route::get('/watches', function () {
    return view('watches');
});

Route::get('/tvs', function () {
    return view('tvs');
});

Route::get('/support', function () {
    return view('support');
});