<?php

use Illuminate\Support\Facades\Route;

//ACARA 3
//route name
Route::get('/', function () {
    return view('welcome');
});

//Basic route
Route::get('/foo', function() {
    return "Hello World";
});

//parameter route
Route::get('/foo/{id}', function ($id) {
    return 'User ' . $id;
});