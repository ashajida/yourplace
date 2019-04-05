<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
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
        $user = User::find($id);
        return view('users.edit-info')->with('user', $user);
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
        $request->validate([
            'name' => ['string'],
            'lastname' => ['string'],
            'email' => ['string', 'email'],
            'city' => ['string'],
            'user_type' => ['string', 'max:255']
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->user_type = $request->user_type;
        $user->save();

        return redirect('/dashboard')->with('success', 'User updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/dashboard')->with('success', 'Post Deleted');
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updatePic(Request $request, $id)
    {
         // Validator
         $request->validate([

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

       
        $user = User::find($id);
        $user->cover_image = $request->cover_image;
        $user->save();

        return redirect('/dashboard')->with('success', 'User updated');
    }

    
}
