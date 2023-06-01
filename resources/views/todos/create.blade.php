<!-- create.blade.php -->


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
        <textarea name="description" placeholder="Description"></textarea>
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date">
        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date">
        <button type="submit">Create</button>
    </form>
</body>
</html>
