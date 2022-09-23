<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        return view('posts', compact('posts'));
    }

    public function store(Request $request)
    {

        // dd($request->all());

        // dd($request->all());
        // $input = $request->all();
        $tags = explode(",", $request->tags);

        // dd($tags);
        // $post = Post::create($input);
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        $post->tag($tags);
        return back()->with('success','Post added to database.');
    }
}
