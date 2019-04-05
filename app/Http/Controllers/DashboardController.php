<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;
use App\SavedPost;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $saved_posts_array = array();

        $id = auth()->user()->id;
        $user = User::find($id);

        

        $users_except_admin = User::where('user_type', 'standard')
        ->orWhere('user_type', 'agent')
        ->get();

        $user_id = auth()->user()->id;
        $saved_posts = SavedPost::where('user_id', $user_id)->get(); 
        
        foreach($saved_posts as $post) 
        {
            $post_to_push_to_array = Post::find($post->post_id);
            array_push($saved_posts_array, $post_to_push_to_array);
        }
        
        
        return view('dashboard')->with('posts', $user->posts)->with('user', $user)->with('saved_posts', $saved_posts_array)
        ->with('users_collection', $users_except_admin);
    }

    public function show($id)
    {
        $posts = Post::find($id);
       
     
        return view('show')->with('post', $posts);
    }

    

}
