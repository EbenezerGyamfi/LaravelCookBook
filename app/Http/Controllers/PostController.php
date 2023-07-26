<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('all-posts', [
            'posts' => Post::where('user_id', auth()->id())->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Post $post)
    {

        return view('post-add', [
            'post' => $post
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        Post::create($this->fields($request));
        return back()->with('status', 'Post created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

        return view('post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($this->fields($request));

        return back()->with('status', 'post updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    private function fields($request)
    {
        return array_merge(['user_id' => auth()->id()], $request->all());
    }
}
