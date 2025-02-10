<?php

use App\Http\Controllers\UserController;
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

//Menentukan parameter route yang diperlukan
Route::get('posts/{post/comments/{comment}', function ($postID, $commentID) {
    //
});

//File Route Default
Route::get('/user', [UserController::class, 'viewUser'])->name('user');

//Route method  post
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

//Redirect route
Route::redirect('/here', '/there');

//Redirect route with status
Route::redirect('/here301', '/there', 301); //move permanent
Route::redirect('/here302', '/there', 302); //found (temporary)
Route::redirect('/here303', '/there', 303); //see other
Route::redirect('/here307', '/there', 307); //temporary redirect
Route::redirect('/here308', '/there', 308); //permanen redirect

//Route view
Route::view('/wwelcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Aulia']);

//Parameter opsional
Route::get('user/{name?}', function ($name = null) {
    return $name;
});
Route::get('user/{name?}', function ($name = 'Silmi') {
    return $name;
});

//Regular Expression Constraint
Route::get('user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');
Route::get('user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');
Route::get('user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//Global Constraint
Route::get('/nameGlobal/{nameGlobal}', function ($nameGlobal) {
    return "Hellow, $nameGlobal!";
});
Route::get('/idGlobal/{idGlobal}', function ($idGlobal) {
    return "User ID: $idGlobal";
});

//Encoded Forward Slashes
Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

//Acara4
//Generate URL