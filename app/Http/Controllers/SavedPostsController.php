<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\SavedPost;
use App\User;

class SavedPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required'
        ]);

        $user_id = auth()->user()->id;
        $post_id = $request->post_id;

        $posts = SavedPost::where('user_id', $user_id)
        ->where('post_id', $post_id)->get();

        if(count($posts) > 0) {

            
            return redirect("posts/"."$post_id")->with('success', 'Property already saved');
        } else {
            $savedPost = new SavedPost;
            $savedPost->user_id = $user_id;
            $savedPost->post_id = $post_id;
            $savedPost->save();
        }

        

        return redirect("posts/"."$post_id")->with('success', 'Property saved');
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
        $res = SavedPost::where('post');
        $res->delete();

        return redirect('/dashboard')->with('sucsess', 'Successfully removed');
    }
}
