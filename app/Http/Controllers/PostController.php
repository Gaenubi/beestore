<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;  
use App\Models\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::with('user', 'tags')->simplePaginate(4);

        return view('posts.index', [
            'posts' => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'headline' => request('Title'),
            'comment' => request('comment'),
            'user_id' => rand(1,10)
           ]);
        
           return redirect('/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->headline = request('Title');
        $post->comment = request('comment');
        $post->save();
    
       return redirect('/blog/'.$post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
 
        return redirect('/blog');
    }
}
