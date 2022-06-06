@extends('layout')

@section('title', 'Edit Task')

@section('content')
    <form method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $task->name }}"><br>
        <textarea cols="40" rows="10" name="description">{{ $task->description }}</textarea><br>
        <button type="submit">Update Task</button>
    </form>
@endsection
