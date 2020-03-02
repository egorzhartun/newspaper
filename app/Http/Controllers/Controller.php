<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	protected function respondWithToken($token)
	{
		return response()->json([
			'token' => $token,
			'token_type' => 'bearer',
			'expires_in' => auth('api')->factory()->getTTL() * 60
		], 200);
	}
}
