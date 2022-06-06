<?php

namespace App\Http\Controllers;

use App\Models\Task;


class TasksController extends Controller
{
    public function index()
    {


        return view('tasks', [
            'tasks' => Task::all()
        ]);

        //foreach (Task::all() as $task) {
        //    echo '<h2>' . $task->name . '</h2>';
        //    echo $task->description . '<br><br>';
        //}

        //return '<h1>Hello World from TasksController</h1>';
    }

    public function show($id)
    {
        $task = Task::find($id);
        echo '<h2>' . $task->name . '</h2>';
        echo $task->description . '<br><br>';
    }

    public function store()
    {
        $task = new Task();
        $task->name = request('task_name');
        $task->description = '';
        $task->save();

        return redirect('/tasks');
    }
}
