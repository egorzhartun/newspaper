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
    return view('home');
})->name('/');

Route::post('login', 'apiLoginController@login')->name('login');
//Route::get('getuser', 'apiLoginController@getAuthenticatedUser');
Route::group(['middleware' => ['jwt.verify']], function() {
	Route::get('user', 'apiLoginController@getAuthenticatedUser');
	//Route::get('closed', 'DataController@closed');
});