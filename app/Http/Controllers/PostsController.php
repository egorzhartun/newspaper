<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;

use App\Posts;
use App\Votes;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.article', ['user' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->input('description'));
        //dd($request);
        $posts = new Posts;
        $posts->title = $request->input('title');
        $posts->description = $request->input('description');
        $posts->user_id = Auth::id();

        $posts->save();
        
        return redirect()
                ->route('profile')
                ->with('success', 'WOW.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $post = Posts::findOrFail($id);

            //return response()->json(['post' => $post], 200);
            return view('user.showarticleonid', [
                'user' => Auth::user(),
                'articleOnID' => $post
            ]);

        } catch (\Exception $e) {

            return response()->json(['message' => 'post not found!'], 404);
        }
    }

    public function likeThisPost($id) {
        
        $checkVotes = DB::table('vote_posts')
                            ->where('user_id', Auth::id())
                            ->where('post_id', $id)
                            ->count();

        if($checkVotes != 0)
        {
            echo "не лайкаем";
        } else {
            $votes = new Votes;
            $votes->post_id = $id;
            $votes->user_id = Auth::id();
            $votes->vote = 1;

            $votes->save();

            //return redirect()->route('user.profile')->('success', 'You like is successfull!');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
