<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use  App\User;

class UserController extends Controller
{
     /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    /**
     * Get the authenticated User.
     *
     * @return Response
     */
    public function profile()
    {
        //return response()->json(['user' => Auth::user()], 200);
        //return response(view('product',array('product'=>$product)),200, ['Content-Type' => 'application/json']);
        return view('user.profile', ['user' => Auth::user()]);
    }

    /**
     * Get all User.
     *
     * @return Response
     */
    public function allUsers()
    {
         return response()->json(['users' =>  User::all()], 200);
    }

    /**
     * Get one user.
     *
     * @return Response
     */
    public function singleUser($id)
    {
        try {
            $user = User::findOrFail($id);

            return response()->json(['user' => $user], 200);

        } catch (\Exception $e) {

            return response()->json(['message' => 'user not found!'], 404);
        }

    }

    public function settings() {
        return view('user.settings', ['user' => Auth::user()]);
    }
}
