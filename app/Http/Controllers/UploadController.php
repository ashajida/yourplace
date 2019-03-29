<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UploadController extends Controller
{

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
            'cover_image' => 'image|nullable|max:1999',
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

    }

}