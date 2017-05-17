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
    return view('login');
});
Route::get('/forside', function () {
    return view('forside-shops');
});
Route::get('/header', function () {
    return view('header');
});


Route::get('/admin/forside', 'storeController@index');

Route::post('/admin/forside','storeController@store');

Route::get('/events', function () {
    return view('Event');
});

Route::get('/add-event', function () {
    return view('Event-Add');
});