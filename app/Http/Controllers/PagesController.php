<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Post;

class PagesController extends Controller
{

    public function __construct()
    {
        
    }

    public function index()
    {
        $data = array( 'title' => 'Homepage', 'show_hero' => true );
        $posts = Post::all();

        return view('pages.index')->with('data', $data)->with('posts', $posts);
    }

    public function rent()
    {
        $data = array( 'title' => 'Rent', 'show_hero' => false );



        return view('pages.rent')->with('data', $data);
    }

    public function buy()
    {
        $data = array( 'title' => 'Buy', 'show_hero' => false );

        return view('pages.buy')->with('data', $data);
    }

    public function agents()
    {
        $data = array( 'title' => 'Agents', 'show_hero' => false );

        return view('pages.agents')->with('data', $data);
    }

}
