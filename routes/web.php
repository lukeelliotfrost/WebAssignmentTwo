<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('home', function () {
    return view('home');
});

Route::get('/indivreviews/create', 'ReviewCRUDController@create');
Route::post('/indivreviews', 'ReviewCRUDController@store');
Route::get('/indivreviews/{indivreview}', 'ReviewCRUDController@show');
Route::get('/indivreviews/index', 'ReviewCRUDController@index');

// GET /indivreviews
// GET /indivreviews/create
// POST /indivreviews
// GET /indivreviews/{id}/edit
// GET /indivreviews/{id}
// PATCH /indivreviews/{id}
// Delete /indivreviews/{id}

Auth::routes();

Route::get('/home', 'HomeController@index');
