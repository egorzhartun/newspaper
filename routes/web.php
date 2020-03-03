<?php

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
Route::get('profile', 'UserController@profile')->name('profile');
Route::post('logout', 'ProfileUser@logoutProfile');
Route::get('settings', 'UserController@settings')->name('settings');
Route::get('users/{id}', 'UserController@singleUser');
