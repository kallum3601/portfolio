<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function submitPost(Request $request){

        $validatedData = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png',
        ]);

        $post = new Post();

        $post->title = $validatedData['title'];
        $post->type = $validatedData['type'];
        $post->body = $validatedData['body'];
        $post->slug = str_replace(' ', '-', $validatedData['title']);

        $imageName = $validatedData['type'] . '_' . $request->image->getClientOriginalName();
        
        
        $imagePath = $request->image->storeAs('photos', $imageName, 'public');

        $post->image_path = $imagePath;

        $post->save();

        return redirect()->route('admin-panel');
    }

    public function getPosts(){
        $posts = Post::orderBy('created_at', 'desc')->simplePaginate(4);

        return $posts;
    }

    public function getSinglePost($slug){
        $post = Post::where('slug', $slug)->first();
        return $post;
    }
}
