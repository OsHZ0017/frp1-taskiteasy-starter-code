@extends('layouts.app')

@section('title', 'All Projects')

@section('content')
    <div class="container">
        <h1 class="title is-3">Projects</h1>
        <br>
        <a href="{{ route('projects.create') }}" class="button is-link">Create a new Project</a>
        <hr>
        @foreach ($projects as $project)
            <x-project.card :project="$project"/>
        @endforeach
    </div>
@endsection
