@extends('layouts.app')

@section('title', 'Create a new task')

@section('content')
    <div class="box">
        <form action="{{ route('task.store') }}" method="POST">
            @csrf
            <h2 class="title is-4">Create a New Task</h2>
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

            <div class="field">
                <label for="priority" class="label">Priority type</label>
                <div class="control">
                    <select name="priority" class="select">
                        <option value="1">No Priority</option>
                        <option value="2">Moderate</option>
                        <option value="3">Urgent</option>
                        <option value="4">Critical</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label for="state" class="label">This task is</label>
                <div class="control">
                    <select name="state" class="select">
                        <option value="0">New</option>
                        <option value="1">In Progress</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label for="time_estimated" class="label">How many minutes will this task take?</label>
                <div class="control">
                    <input type="number" name="time_estimated" class="input" value="10">
                </div>
            </div>

            <div class="field">
                <label for="time_spent" class="label">How many minutes have I already spent on this task?</label>
                <div class="control">
                    <input type="number" name="time_spent" class="input" value="0">
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

