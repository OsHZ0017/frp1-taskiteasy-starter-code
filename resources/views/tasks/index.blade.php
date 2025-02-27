@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    <div class="container">
        <h1 class="title is-3">All Tasks</h1>
        <br>
        <a href="{{ route('task.create') }}" class="button is-link">Create a new Task</a>
        <hr>
        @foreach ($tasks as $task)
        <x-task.card :task="$task"/>
            @endforeach
    </div>
@endsection
