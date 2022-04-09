<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth, Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('profile');
        $user_id = Auth::user()->id;
        // dd($user_id);
        $users = User::all();
        $post = User::join('posts', 'posts.user_id', '=', 'users.id')->where('users.id', $user_id)->orderBy('posts.id', 'DESC')->paginate(10);
        return view('profile', compact('post', 'users'));
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
        //
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
    public function update(Request $request, User $user)
    {
        $user = Auth::user();
        // dd($user);
        $input = $request->all();
  
        if ($image = $request->file('profile_image')) {
            $destinationPath = 'images/Profile';
            $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['profile_image'] = "$profileImage";
        } else{
            unset($input['profile_image']);
        }
        if ($image = $request->file('cover_image')) {
            $destinationPath = 'images/Profile';
            $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover_image'] = "$profileImage";
        } else{
            unset($input['cover_image']);
        }
          
        $user->update($input);
        
        return redirect()->route('profile.index')
                        ->with('success','Profile updated successfully');
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
