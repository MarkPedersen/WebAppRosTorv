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
Route::get('/forside-admin', function () {
    return view('admin-frontpage');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/store','storeController@postStore');

Route::get('/events', function () {
    return view('Event');
});

Route::get('/add-event', function () {
    return view('Event-Add');
});