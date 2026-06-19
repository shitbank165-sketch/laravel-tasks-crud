<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return response('Tasks index');
    }

    public function create()
    {
        return response('Tasks create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'is_done' => ['nullable', 'boolean'],
        ]);

        Task::create([
            'title' => $validated['title'],
            'is_done' => $request->boolean('is_done'),
        ]);

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        return response('Task show '.$task->id);
    }

    public function edit(Task $task)
    {
        return response('Task edit '.$task->id);
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'is_done' => ['nullable', 'boolean'],
        ]);

        $task->update([
            'title' => $validated['title'],
            'is_done' => $request->boolean('is_done'),
        ]);

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}