<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestControler;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', "homecontroller@index");
// Route::get('/home', [TestControler::class, "index"]);

// Route::get('/welcome', function () {
//     return'welcome to laravel page';
// });

Route::get('/home', function () {
    return view('home/portfolio');
});


