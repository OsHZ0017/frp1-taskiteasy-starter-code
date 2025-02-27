@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="container">
        <h1 class="title is-3">Blog</h1>
        <p class="is-italic">Welcome to our blog, where productivity meets practicality!
            Dive into a world of efficiency and organization as we explore tips, tricks, and strategies to conquer
            your to-do list and elevate your productivity game.</p>
        <br>
        <a href="{{ route('post.create') }}" class="button is-link">Create a new Post</a>
        <hr>
        @foreach ($posts as $post)
        <x-post.card :post="$post"/>
            @endforeach
    </div>
@endsection
