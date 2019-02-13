<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Posts from the database
        $posts = null;
        $data = array();
        $location = null;

        if ($request->filled('location')) {
            //
            $location = $request->input('location');
    
            $posts = Post::where('location', $location)
            ->orWhere('postcode', $location)->orderBy('title', 'desc')->take(10)->get();

            $data = array(
                'show_hero' => false,
            );

            return view('posts.index')->with( 'data', $data)->with('posts', $posts );
        }
    
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
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $data = array('show_hero' => false);
        
        return view('posts.show')->with('data', $data)->with('post', $post);
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

    /**
     * Remove the specified resource from storage.
     *
     * param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fetchProperties(Request $request)
    {
        // Validator
        $request->validate([
            'location' => 'required',
            'num-beds' => 'required',
            'price' => 'required',
            'property-status' => 'required',
        ]);

        // Input Variables
        $location = $request->input('location');
        $bedrooms = $request->input('num-beds');
        $price = $request->input('price');
        $property_status = $request->input('property-status');

        $posts = Post::where('location', $location)
                ->orWhere('postcode', $location)
                ->where('property_status', $property_status)
                ->where('bedrooms', '<=', $bedrooms)
                ->where('price', '<=', $price)
                ->take(10)
                ->get();

        $data = array('show_hero' => false);

        return view('posts.show')->with('data', $data)->with('posts', $posts);
        
    }
}
