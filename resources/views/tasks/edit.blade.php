<form action="{{ route('tasks.update', $task->id) }}" method="post">
    @method('PUT')

    <input type="text" name="task" value="{{ $task->task }}">
    <button>Update task</button>
</form>

{{ session('message') }}