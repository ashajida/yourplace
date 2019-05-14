<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\SavedPost;



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
            ->orderBy('title', 'desc')->take(10)->get();

            $data = array(
                'show_hero' => false,
            );

            return view('posts.results')->with( 'data', $data)->with('posts', $posts );
        }

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // Validator
          $request->validate([
            'address' => 'required',
            'bathrooms' => 'required',
            'bedrooms' => 'required',
            'city' => 'required',
            'price' => 'required',
            'title' => 'required',
            'property-type' => 'required',
            'status' => 'required',
            'body' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('cover_image'))
        {
            // Get filename with ext
            $filename_with_ext = $request->file('cover_image')->getClientOriginalName();

            // filename
            $filename = pathinfo($filename_with_ext, PATHINFO_FILENAME);

            //Extension
            $extension = $request->file('cover_image')->guessClientExtension();

            // Filename to store
            $filename_to_store = $filename.'_'.time().'.'.$extension;

            // Upload the image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filename_to_store);
        } else {
            $filename_to_store = 'noimage.jpg';
        }



        // Input Variables
        $post = new Post();
        $post->title = $request->input('title');
        $post->bedrooms = $request->input('bedrooms');
        $post->bathrooms = $request->input('bathrooms');
        $post->address = $request->input('address');
        $post->location = $request->input('city');
        $post->body = $request->input('body');
        $post->price = $request->input('price');;
        $post->property_status = $request->input('status');
        $post->type = $request->input('property-type');
        $post->longitude = $request->input('longitude');
        $post->latitude = $request->input('latitude');
        $post->user_id = auth()->user()->id;
        $post->image_cover = $filename_to_store;
        $post->save();
       
        return redirect('/dashboard')->with('success', 'Property Added');

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
        $user_id = $post->user_id;
        $data = array('show_hero' => false);
        
        $agent = User::find($user_id);

        $isSaved = false;

        if(auth()->user()) {
            $current_user_id = auth()->user()->id;
            $savedPost = SavedPost::where('post_id', $post->id)
            ->where('user_id', $current_user_id)
            ->get();
           
            if(count($savedPost) > 0) {
                $isSaved = true;
            } 
        }

        return view('posts.show')->with('data', $data)->with('post', $post)->with('agent', $agent)
        ->with('savedPost', $isSaved);
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
        $res = Post::find($id);
        $res->delete();

        return redirect('/dashboard')->with('sucess', 'Post Deleted');


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
            'type' => 'required',
            'property-status' => 'required',
        ]);

        // Input Variables
        $location = $request->input('location');
        $bedrooms = $request->input('num-beds');
        $price = $request->input('price');
        $type = $request->input('type');
        $property_status = $request->input('property-status');

        $posts = Post::where('location', $location)
                ->where('property_status', $property_status)
                ->where('bedrooms', '<=', $bedrooms)
                ->where('price', '<=', $price)
                ->where('type', $type)
                ->take(10)
                ->get();

        return view('posts.results')->with('posts', $posts);
        
    }
}
