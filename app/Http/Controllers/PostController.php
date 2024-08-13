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
            'image'=>'nullable|mimes:jpeg, jpg, png',
        ]);
        $imageName = null;
        if (isset($request->image)){
            //Upload Image
            $imageName = time().'.'.$request->image->extension();
            //when upload an image, it goes to public folder named images
            $request->image->move(public_path('images'),$imageName);
        }

        //add new post
        $post = new Post; #get post model
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $imageName;

        $post->save();  #save to database

        return redirect()->route('home')->with('success', 'Your Post has been created !');
    }

    public function editData($id){
        $post = Post::findorFail($id);
        return view('edit', ['ourPost' => $post]) ;
    }

    public function updateData($id,Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image'=>'nullable|mimes:jpeg, jpg, png',
        ]);



        //Update post
        $post = Post::findorFail($id);
        $post->name = $request->name;
        $post->description = $request->description;
        //Upload Image
        if (isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            //when upload an image, it goes to public folder named images
            $request->image->move(public_path('images'),$imageName);
            $post->image = $imageName;
        }

        $post->save();  #save to database

        return redirect()->route('home')->with('success', 'Your Post has been updated !');
    }



}
