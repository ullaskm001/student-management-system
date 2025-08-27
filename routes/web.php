<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about-us', function(){
    $name = "John Doe";
    $age = 25;
    return view('aboutus')->with('name', $name)->with('age', $age);;
});

// Route::view("about-us", "aboutus");