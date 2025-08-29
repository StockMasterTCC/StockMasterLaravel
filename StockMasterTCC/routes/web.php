<?php

use Illuminate\Support\Facades\Route;

// Irá pegar e retornar uma função do arquivo da pasta view

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

Route::get("listaDeFuncionario", function () {
    return view('listaDeFuncionario');
});


Route::get("gestaoEntradaSaida", function () {
    return view('listaDeFuncionario');
});


Route::get("cadastroFuncionario", function () {
    return view('cadastroFuncionario');
});
