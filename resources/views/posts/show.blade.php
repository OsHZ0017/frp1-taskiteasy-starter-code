@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="fixed-grid has-4-cols">
      <div class="grid">
     <div class="cell is-col-span-3">
    <h3 class="title is-3">{{ $post->title }}</h3>
    <div>
        <span class="tag">Created on {{ $post->created_at->toFormattedDateString() }}</span>
        <span class="tag">Last updated on {{ $post->updated_at->toFormattedDateString() }}</span>
    </div>
    <hr>
    <p>{!! $post->body !!}</p>
    <br>
    <hr>
    <h6 class="subtitle is-7 is-italic">Post ID: {{ $post->id }}</h6>
     </div>
        <div class="cell">
            <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="button is-link">
                Edit Post
            </a><br><br>
            <button class="js-modal-trigger button is-danger" data-target="modal">Delete Post</button>
        </div>
      </div>
    </div>
@endsection

@section('foot')
    <x-modal>
        <div class="box">
            <h3 class="title is-4">Are you sure you want to delete this post?</h3>
            <form action="{{ route('post.delete', ['id' => $post->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-danger">Yes, Delete Post</button>
                    </div>
                </div>
            </form>
        </div>
    </x-modal>
@endsection
