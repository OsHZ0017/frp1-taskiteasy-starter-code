@extends('layouts.app')

@section('title', 'Create a new project')

@section('content')
    <div class="box">
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <h2 class="title is-4">Create a New Project</h2>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click 'Submit'
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
                    <input type="text" name="title" class="input" autofocus>
                </div>
            </div>

            <div class="field">
                <label for="description" class="label">Description <span class="has-text-danger">*</span></label>
                <div class="control">
                    <input type="text" name="description" class="input">
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
