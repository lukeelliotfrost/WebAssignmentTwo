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

Route::get('/indivreviews', function () {
    $indivreviews = DB::table('indivreviews')->latest()->get();
    return view('indivreviews.index', compact('indivreviews'));
});

Route::get('/indivreviews/{review}', function ($id) {
    $indivreviews = DB::table('indivreviews')->find($id);
    return view('indivreviews.show', compact('indivreviews'));
});

Auth::routes();

Route::get('/home', 'HomeController@index');
