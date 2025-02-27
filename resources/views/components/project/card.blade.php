<a href="{{ route('projects.show', ['project' => $project]) }}">
    <div class="box">
        <h3 class="title is-4 has-text-info">{{ $project->title }}</h3>
        <p class="is-5 is-italic">{!! $project->description !!}</p>
        <p class="subtitle is-7">{{ $project->created_at->toFormattedDateString() }}</p>
    </div>
</a>
<br>

