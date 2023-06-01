<!-- edit.blade.php -->
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
        <textarea name="description">{{ $todo->description }}</textarea>
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" value="{{ $todo->start_date }}">
        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date" value="{{ $todo->due_date }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>
