<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    $a = 12;
    $b = 20;
    $c = $a+$b;

    return "lalalala... hello world: ".$c;
});

Route::get('/login', function(){})->name('login');