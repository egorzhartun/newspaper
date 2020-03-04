<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use  App\User;
use App\Posts;
use App\Votes;
use DB;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function profile()
    {
        
        $myArticles = DB::table('users_posts')
                                ->orderBy('id', 'desc')
                                ->where('user_id', Auth::id())
                                ->get();

        return view('user.profile', [
            'user' => Auth::user(),
            'articles' => $myArticles
        ]);
        
    }


    public function allUsers()
    {
         return response()->json(['users' =>  User::all()], 200);
    }


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
