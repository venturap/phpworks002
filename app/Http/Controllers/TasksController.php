<?php

namespace App\Http\Controllers;

use App\Models\Task;


class TasksController extends Controller
{
    public function index()
    {
        return view('tasks', [
            'tasks' => Task::all(),
            'editMode' => false
        ]);
    }

    public function inlineEdit($id)
    {
        return view('tasks', [
            'tasks' => Task::all(),
            'editMode' => $id
        ]);
    }

    public function show($id)
    {
        $task = Task::find($id);

        return view('edit_task', [
            'task' => $task
        ]);
    }

    public function edit($id)
    {
        $task = Task::find($id);

        $task->name = request('name');

        $task->description = request('description') ?? $task->description;

        $task->save();

        return redirect('/tasks');

    }

    public function store()
    {
        $task = new Task();

        $task->name = request('task_name');
        $task->description = '';
        $task->save();

        return redirect('/tasks');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks');
    }
}
