<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create New Task</a>

    <table class="table mt-4">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->status }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <!-- Кнопка для открытия модального окна -->
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
