<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = User::join('posts', 'posts.user_id', '=', 'users.id')->orderBy('posts.created_at', 'DESC')->get();
        // $post = User::join('posts', 'posts.user_id', '=', 'users.id')->join('likes', 'likes.post_id', '=', 'posts.id')->orderBy('posts.created_at', 'DESC')->get();
        $likes = Like::all();
        return response()->json([
            'likes'=>$likes,
            'post'=>$post,
        ]);
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

            $likes = new Like;
            $likes->post_id = $request->input('post_id');
            $likes->user_id =  $request->input('user_id');
            $likes->save();
            return response()->json([
                'status'=>200,
                'message'=>'Student Added Successfully.'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
