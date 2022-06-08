@extends('layout')
@section('title', 'List of Tasks')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card text-center">
            <div class="card-header">
              Insert New Tasks
            </div>
            <div class="card-body">
              <form method="POST" class="row justify-content-center">
                    @csrf
                    <div class="col-auto">
                        <input class="form-control" type="text" name="task_name" placeholder="Add a task">
                    </div>
                    <div class="col-auto">
                        <button  type="submit" class="btn btn-primary form-control">Add Task</button>
                    </div>
              </form>
            </div>
        </div>
    </div>

</div>

<div class="row my-5">
    <div class="col-12">
        <table class="table table-striped ">
            <tr class="">
                <th class="">Task</th>
                <th colspan="3">Action</th>
            </tr>
            @foreach ($tasks as $task)
                <tr class="">
                    <td class="">
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
    </div>


</div>




@endsection



