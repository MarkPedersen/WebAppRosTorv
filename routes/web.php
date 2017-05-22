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

Route::get('/forside', function () {
    return view('forside-shops');
});
Route::get('/header', function () {
    return view('header');
});


//Store Routes

Route::get('/admin/forside', 'storeController@index');

Route::post('/admin/forside','storeController@store');

Route::delete('/admin/forside/delete/{store_id}', 'storeController@destroy');

//Event Routes

Route::get('/events', 'eventController@index');
Route::post('/events','eventController@store');

//Add event route

Route::get('/add-event', 'eventController@index');
Route::post('/add-event', 'eventController@store');

//get token

Route::get('/login', 'loginController@index' );
Route::post('/login', 'loginController@store');


/*Route::get('/events', function () {
    return view('Event');
});*/

Route::get('/tilføj-event', function () {
    return view('Event-Add');
});

Route::get('/nyt-tilbud', function () {
    return view('Add-Offer');
});

Route::get('/test', function () {
    return view('testofmaster');
});
