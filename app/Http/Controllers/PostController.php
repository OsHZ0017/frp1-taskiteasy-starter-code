<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $id): View
    {
        return view('posts.show', ['post' => $id]);
    }

    public function edit(Post $id): View
    {
        return view('posts.edit', ['post' => $id]);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Store a newly created Post in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'excerpt' => 'nullable',
            'body' => 'required'
        ]);
        // Create a new Post model object
        Post::create($validated);

        // Redirect to the blog index page
        return redirect()->route('post.index');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'excerpt' => 'nullable',
            'body' => 'required',
            'id' => ['numeric', 'required']
        ]);

        $old = Post::find($validated['id']);
        $old->update($validated);

        return redirect()->route('post.show', ['id' => $validated['id']]);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('post.index');
    }
}
