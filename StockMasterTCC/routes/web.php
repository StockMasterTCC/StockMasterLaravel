<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('stockmasterLogin');
});

Route::get('cadastro', function () {
    return view('cadastro');
});

Route::get('login', function () {
    return view('login');
});

Route::get('cadastrarMercadoria', function () {
    return view('cadastrarMercadoria');
});