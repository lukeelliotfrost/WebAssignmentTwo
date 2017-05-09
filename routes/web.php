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

Route::get('reviewpdf', function() {
  $reviews = App\IndivReview::all();

  $pdf = PDF::loadView('reportpdf', ['reviews' => $reviews]);
  return $pdf->download('data.pdf');
});

Route::get('charts', 'ChartController@getLaraChart');
Route::get('gcharts', 'ChartController@getGaugeChart');

Route::get('indivreviews/index', 'ReviewCRUDController@index');
Route::get('indivreviews/create', 'ReviewCRUDController@create');
Route::post('indivreviews/create', 'ReviewCRUDController@store');
Route::get('indivreviews/edit/{review}', 'ReviewCRUDController@edit');
Route::post('indivreviews/edit/{review}', 'ReviewCRUDController@update');
Route::get('indivreviews/delete/{review}', 'ReviewCRUDController@destroy');
Route::get('indivreviews/{review}', 'ReviewCRUDController@show');




Auth::routes();

Route::get('/home', 'HomeController@index');
