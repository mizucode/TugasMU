<!DOCTYPE html>
<html>
<head>
    <title>Create To Do</title>
</head>
<body>
    <h1>Create To Do</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>
