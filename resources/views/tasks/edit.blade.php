@extends('layout')

@section('content')
    <h1>Edit Task</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ $task->description }}</textarea>
        </div>
        <button type="submit">Update Task</button>
    </form>
@endsection
