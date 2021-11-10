<h1>Tasks:</h1>

@foreach ($tasks as $task)
    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->task }}</a>
    <br>
@endforeach
