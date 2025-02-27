<a href="{{ route('post.show', ['id' => $post->id]) }}">
        <div class="box">
            <h3 class="title is-4 has-text-info">{{ $post->title }}</h3>
            <p class="is-5 is-italic">{!! $post->excerpt !!}</p>
            <p class="subtitle is-7">{{ $post->created_at->toFormattedDateString() }}</p>
        </div>
    </a>
<br>

