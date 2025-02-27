@extends('layouts.app')

@section('title', 'TaskITEasy')

@section('content')
    <div class="container">
        <h1 class="title is-3">My TODOs</h1>
        <h2 class="subtitle is-6 is-italic">
            Completing your tasks brings a sense of achievement, increases productivity,
            reduces stress, and helps you manage your time effectively. It creates a
            positive feedback loop, encourages you to prioritize important tasks, and
            provides opportunities to reward yourself. So, dive in, conquer your tasks,
            and enjoy the numerous benefits that come with it! You've got this!
        </h2>
        <br>
        <hr>
    </div>
    <div class="container">
        <h2 class="title is-4">Latest Post</h2>
        <x-post.card :post="$post"/>
    </div>
    <br>
    <div class="container">
        <h2 class="title is-4">Tasks to Complete</h2>
        @foreach ($tasks as $task)
        <x-task.card :task="$task"/>
            @endforeach
    </div>
@endsection
