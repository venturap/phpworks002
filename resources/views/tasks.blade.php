<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tasks App</h1>

    <form method="POST">
        @csrf
        <input type="text" name="task_name" placeholder="Add a task">
        <button type="submit">Add Task</button>
    </form>
    <table>
        <tr>
            <th>Task</th>
            <th>Action</th>
        </tr>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>
                    <button>Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
    <ul>
        @foreach ($tasks as $task)
            <li>
                <a
                href="/tasks/{{$task->id}}"
                title="{{$task->description}}"
                >
                    {{$task->name}}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
