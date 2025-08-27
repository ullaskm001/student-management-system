<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return "hello from laravel";
});

Route::get('/about', function(){
    return "about page";
});

// Route::get('details/students', function(){
//     return "students details page";
// });

// Route::get('details/teachers', function(){
//     return "Teachers details page";
// });

Route::prefix('details')->group(function(){
    Route::get('students', function(){
        return "students details page";
    })->name('students-details');

    Route::get('teachers', function(){
        return "Teachers details page";
    })->name('teachers-details');
});

Route::get("user/{id}/{reg}", function($id,$reg){
    return "user id is :" . $id . " registration number is :" . $reg;
});

Route::fallback(function(){
    return "404 page not found";
});
