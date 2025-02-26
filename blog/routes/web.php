<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    $a = 13;
    $b = 20;
    $age = $a+$b;
    $name = "Brent";

    $post=['css','html','php','javascript'];
    return view('home', ["name"=>$name, "age"=>$age,"posts"=>$post]);
});

Route::get('/login', function(){})->name('login');

// dynamic routing with wildcards

Route::get('users/{id}', function ($id) {
    $users = [
        1 => 'Alice',
        2 => 'Bob',
        3 => 'Charlie'
    ];
    
    if (!array_key_exists($id, $users)) {
        abort(404);
    }
    
    return view('users', ['user' => $users[$id]]);
});