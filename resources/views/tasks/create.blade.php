<form action="{{ route('tasks.store') }}" method="post">
    <input type="text" name="task">
    <button>Create a task</button>
</form>

@foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
@endforeach
