<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

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
        $id = auth()->user()->id;
        $user = User::find($id);
        
        return view('dashboard')->with('posts', $user->posts)->with('user', $user);
    }

    public function show($id)
    {
        $posts = Post::find($id);
        return view('show')->with('post', $posts);
    }

    public function createPost() {
        return view('create');
    }
}
