@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Task Details: {{ $task->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Task Name:</strong> {{ $task->name }}</p>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
@endsection
