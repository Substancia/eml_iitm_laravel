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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', 'CreateController@home');
Route::get('/create', function () {
    return view('create');
});
Route::get('/header', function () {
    return view('inc.header');
});
Route::post('/insert', 'CreateController@add');
Route::get('/update/{id}', 'CreateController@update');
Route::post('/edit/{id}', 'CreateController@edit');
Route::get('/read/{id}', 'CreateController@read');
Route::get('/delete/{id}', 'CreateController@delete');
Route::get('/about', function() {
	return view('about');
});
Route::get('/contact', function() {
	return view('contact');
});
Route::get('/suggestion', function() {
	return view('suggestion');
});
Route::post('/contactupload', 'CreateController@contact');
Route::get('/contactview', 'CreateController@contactview');
Route::get('/contactread/{id}', 'CreateController@contactread');
Route::get('/contactdelete/{id}', 'CreateController@contactdelete');
