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

/*
Route::group(['middleware' => ['jwt.verify']], function() {
	Route::get('profile', 'apiLoginController@getAuthenticatedUser');
	Route::get('closed', 'DataController@closed');
	Route::get('logout', 'ProfileUser@logoutProfile');
	Route::get('pr', 'UserController@profile');
});
*/

	Route::post('register', 'apiLoginController@register')->name('register');
	//Route::post('login', 'AuthController@login');
	Route::get('profile', 'UserController@profile');
	Route::post('logout', 'ProfileUser@logoutProfile');
	//Route::get('users/{id}', 'UserController@singleUser');
	//Route::get('users', 'UserController@allUsers');