<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('site.home');
});

Route::get('/sobre', function () {
    return view('site.sobre');
});

Route::get('/contato', function () {
    return view('site.contato');
});