@extends('layout')
@section('title', 'List of Tasks')
@section('content')
    <form method="POST">
        @csrf
        <input type="text" name="task_name" placeholder="Add a task">
        <button type="submit">Add Task</button>
    </form>
    <table>
        <tr>
            <th>Task</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($tasks as $task)
            <tr>
                <td>
                    @if ($editMode == $task->id)
                        <form method="POST" action="/tasks/{{$task->id}}">
                            @csrf
                            @method('PUT')
                            <input type="text" name="name" value="{{ $task->name }}">
                            <button type="submit">Update</button>
                        </form>
                    @else
                        {{ $task->name }}
                    @endif
                </td>
                <td>
                    <form method="POST" action="/tasks/{{$task->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="/tasks/{{$task->id}}"><button type="submit">Edit</button></a>
                </td>
                <td>
                    <a href="/tasks/edit2/{{$task->id}}"><button type="submit">Edit2</button></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection



