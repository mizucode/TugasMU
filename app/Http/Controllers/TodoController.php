<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Auth::user()->todos;

        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->user_id = Auth::id();
        $todo->save();

        return redirect()->route('todos.index')->with('Beres', 'Beres Coek');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos.index')->with('success', 'To Do updated successfully.');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'To Do deleted successfully.');
    }
}
