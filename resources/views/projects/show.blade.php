@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <div class="fixed-grid has-4-cols">
        <div class="grid">
            <div class="cell is-col-span-3">
                <h3 class="title is-3">{{ $project->title }}</h3>
                <div>
                    <span class="tag">Created on {{ $project->created_at->toFormattedDateString() }}</span>
                </div>
                <hr>
                <p>{!! $project->description !!}</p>
                <br>
                <hr>
                <h6 class="subtitle is-7 is-italic">Post ID: {{ $project->id }}</h6>
            </div>
            <div class="cell">
                <a href="{{ route('projects.edit', ['project'=> $project]) }}" class="button is-link">
                    Edit Project
                </a><br><br>
                <button class="js-modal-trigger button is-danger" data-target="modal">Delete Project</button>
            </div>
        </div>
    </div>
@endsection

@section('foot')
    <x-modal>
        <div class="box">
            <h3 class="title is-4">Are you sure you want to delete this project?</h3>
            <form action="{{ route('projects.destroy', ['project' => $project]) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-danger">Yes, Delete Project</button>
                    </div>
                </div>
            </form>
        </div>
    </x-modal>
@endsection
