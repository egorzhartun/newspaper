<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ProfileUser extends Controller
{

    public function logoutProfile(Request $request) {
		\Auth::logout();
		\Session::flush();
		return \Redirect::route('/');
    }
}
