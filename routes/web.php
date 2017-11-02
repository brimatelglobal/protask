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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::get('/profile/{username}', 'ProfileController@profile');
Route::get('/user', 'ProfileController@user');
Route::get('/user/create', 'ProfileController@create');
Route::post('/profile/create', 'ProfileController@store');


// route for project
Route::get('/project', 'ProjectController@index');
Route::get('/project/create', 'ProjectController@create');
Route::post('/project', 'ProjectController@store');

Route::get('/project/{id}', 'ProjectController@show');
Route::get('/project/{id}/edit', 'ProjectController@edit');
Route::put('/project/{id}', 'ProjectController@update');
Route::post('/project/{id}', 'ProjectController@destroy');

// route for receivable
Route::get('/receivable', 'ReceivableController@index');
Route::get('/receivable/create', 'ReceivableController@create');
Route::post('/receivable', 'ReceivableController@store');

Route::get('/receivable/{id}', 'ReceivableController@show');
Route::get('/receivable/{id}/edit', 'ReceivableController@edit');
Route::put('receivablet/{id}', 'ReceivableController@update');
Route::post('/receivable/{id}', 'ReceivableController@destroy');
=======
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
