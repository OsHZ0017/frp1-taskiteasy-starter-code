@extends('layouts.app')

@section('title', 'Create a new project')

@section('content')
    <div class="box">
        <form action="{{ route('projects.update', ['project' => $project]) }}" method="post">
            @csrf
            @method('PUT')
            <h2 class="title is-4">Edit your project</h2>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please change what you would like to change within the fields and click 'Submit'
            </h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="tag is-danger">{{ $error }}</li><br>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br>

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Title <span class="has-text-danger">*</span></label>
                <div class="control">
                    <input type="text" name="title" class="input" value="{{ $project['title'] }}" autofocus>
                </div>
            </div>

            <div class="field">
                <label for="description" class="label">Description <span class="has-text-danger">*</span></label>
                <div class="control">
                    <input type="text" name="description" class="input" value="{{ $project['description'] }}">
                </div>
            </div>

            <div class="field">
                <label for="id" class="subtitle is-6">Project ID</label>
                <div class="control">
                    <input type="text" name="id" class="input" value="{{ $project['id'] }}" readonly>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
