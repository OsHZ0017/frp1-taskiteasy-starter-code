<a href="{{ route('task.show', ['id' => $task->id]) }}">
    <div class="box">
        <h3 class="title is-5 has-text-info">{{$task->title}}</h3>
        <p class="subtitle is-6">{!! $task->description !!}</p>

        @if ($task->priority != null)
            @switch($task->priority)
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
                <span class="tag is-success">Completed!</span>
        @endswitch


    </div></a>
<br>
