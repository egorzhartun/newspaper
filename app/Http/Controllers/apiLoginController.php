<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use  App\User;

class apiLoginController extends Controller
{
	public function login(Request $request) {


		//validate incoming request 
		$this->validate($request, [
		'email' => 'required|string',
		'password' => 'required|string',
		]);

		$credentials = $request->only(['email', 'password']);

		if (! $token = Auth::attempt($credentials)) {
		return response()->json(['message' => 'Unauthorized'], 401);
		}

		$this->respondWithToken($token);

		return redirect()->route('/')->with('success', 'You have successfully logged in. For further work with the service, go to your profile.');
		
	}

	public function register(Request $request)
	{
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        try {
           
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $plainPassword = $request->input('password');
            $user->password = app('hash')->make($plainPassword);

            $user->save();

            return redirect()->route('/')->with('success', 'You have successfully registered! Now you can share your news with users of this service. To get started, go to log in to your account.');

        } catch (\Exception $e) {
            //return error message
            return response()->json(['message' => 'User Registration Failed!'], 409);
        }
	}

}
