@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Status: {{ ucfirst($task->status) }}</p>
    <a href="{{ route('tasks.index') }}">Back</a>
@endsection
