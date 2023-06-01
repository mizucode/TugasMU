<!DOCTYPE html>
<html>
<head>
    <title>Edit To Do</title>
</head>
<body>
    <h1>Edit To Do</h1>

    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
