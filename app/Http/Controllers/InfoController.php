<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Post;
use Illuminate\View\View;

class InfoController extends Controller
{
    public function home(): View
    {
        $query = Task::where('state', '!=', 3)->orderBy('state');
        $tasks = $query->get();
        $post = Post::orderBy('created_at', 'desc')->first();
        return view('welcome', ['tasks' => $tasks, 'post' => $post]);
    }

    public function about(): View
    {
        return view('about');
    }
}
