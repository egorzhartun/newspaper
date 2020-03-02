<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use  App\User;

class apiLoginController extends Controller
{
	public function login(Request $request) {
		
		$credentials = $request->only('email', 'password');

		try {
			if (! $token = auth('api')->attempt($credentials)) {
				return response()->json(['error' => 'invalid_credentials'], 400);
			}

			} catch (JWTException $e) {
				return response()->json(['error' => 'could_not_create_token'], 500);
			}

			return response()->json(compact('token'));

			/*
		$credentials = request(['email', 'password']);

		if (!$token = auth('api')->attempt($credentials)) {
			return response()->json(['error' => 'Unauthorized'], 401);
		}
		*/
		
	}

    public function getAuthenticatedUser()
        {
                    try {

                            if (! $user = \JWTAuth::parseToken()->authenticate()) {
                                    return response()->json(['user_not_found'], 404);
                            }

                    } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

                            return response()->json(['token_expired'], $e->getStatusCode());

                    } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                            return response()->json(['token_invalid'], $e->getStatusCode());

                    } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

                            return response()->json(['token_absent'], $e->getStatusCode());

                    }

                    return response()->json(compact('user'));

    }
}
