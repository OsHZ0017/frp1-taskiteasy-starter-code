@extends('layouts.app')

@section('title', 'Task: '.$task->title)

@section('content')
    <h3 class="title is-3"><span>
                @if ($task->completed_at != null)
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" opacity=".3"
                  d="M5 19h14V5H5v14zm2.41-7.4l2.58 2.58l6.59-6.59L17.99 9l-8 8L6 13.01l1.41-1.41z"/>
            <path fill="currentColor"
                  d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM17.99 9l-1.41-1.42l-6.59 6.59l-2.58-2.57l-1.42 1.41l4 3.99z"/>
        </svg>
            @endif
        </span>
        {{ $task->title }}</h3>

    <p class="subtitle is-6 is-italic">{!! $task->description !!}</p>

    <div>
        <strong>Completion: </strong>
        <span class="tag {{ $task->time_spent > $task->time_estimated ? 'has-text-weight-bold has-text-danger' : '' }}">
        {{$task->time_spent}}/{{$task->time_estimated}}
    </span></div>
    <div><strong>Priority: </strong>
    @if ($task->priority != null)
        @switch($task->priority)
            @case(1)
                <span>none</span>
            @case(2)
                <span class="tag">Moderate</span>
            @break
            @case(3)
                <span class="tag is-warning">Urgent</span>
            @break
            @case(4)
                <span class="tag is-danger has-text-weight-bold">Critical!</span>
            @endswitch
    @endif
    </div>


    <div>
        <strong>Status: </strong>
    @switch($task->state)
        @case(0)
        <span class="tag is-link">New!</span>
        @break
        @case(1)
        <span class="tag is-warning">In progress</span>
        @break
        @case(2)
        <span class="tag is-danger">On hold</span>
        @break
        @case(3)
        <span class="tag is-success">Task completed!</span>
        @endswitch
    </div>

    <div id="timestamps">
        <span class="tag">
            Created on {{ $task->created_at->toFormattedDateString()}}
        </span>
        <span class="tag">
            Last updated on {{ $task->updated_at->toFormattedDateString()}}
        </span>
        @if ($task->completed_at != null)
            <span class="tag">
            Completed {{ \Carbon\Carbon::parse($task->completed_at)->diffForHumans()}}
            </span>
            @endif
    </div>

@endsection
