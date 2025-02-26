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
    $email = request('email');
    // for testing: home?email=test@example.com

    $post=['css','html','php','javascript'];
    return view('home', ['name'=>$name, 'age'=>$age,'posts'=>$post, 'email'=>$email]);
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

// dynamic routing exercise
route::get('posts/{id}', function ($id) {
    $posts = [
        1 => [
            'title' => 'Getting Started with Laravel',
            'content' => 'Laravel is a web application framework with expressive, elegant syntax...',
            'date' => '2025-01-15'
        ],
        2 => [
            'title' => 'Mastering Blade Templates',
            'content' => 'Blade is the simple, yet powerful templating engine provided with Laravel...',
            'date' => '2025-01-20'
        ],
        3 => [
            'title' => 'The Power of Eloquent ORM',
            'content' => 'Eloquent is an object-relational mapper that makes it enjoyable to interact with your database...',
            'date' => '2025-01-25'
        ],
    ]; 
        if (!isset($posts[$id])) {
            abort(404);
        }
        return view('posts', ['post' => $posts[$id]]);
});