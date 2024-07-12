@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Tasks</a>
    </div>
@endsection

