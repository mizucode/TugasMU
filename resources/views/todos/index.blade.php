<!DOCTYPE html>
<html>
<head>
    <title>To Do List</title>
</head>
<body>
    <h1>To Do List</h1>

    <a href="{{ route('todos.create') }}">Create New To Do</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($todos as $todo)
            <li>
                <strong>{{ $todo->title }}</strong><br>
                <em>Description:</em> {{ $todo->description }}<br>
                <em>Start Date:</em> {{ $todo->start_date }}<br>
                <em>Due Date:</em> {{ $todo->due_date }}<br>
                <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
