<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function storeData(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image'=>'mimes:jpeg, jpg, png',
            'image'=>'nullable',
        ]);
        $post = new Post; #get post model
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $request->image;

        $post->save();  #save to database

        return redirect()->route('home')->with('success', 'Your Post has been created !');
    }
}
