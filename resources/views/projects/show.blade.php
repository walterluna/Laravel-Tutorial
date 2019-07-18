@extends('layout')

    @section('content')
        <h1>{{ $project->title }}</h1>
        {{ $project->description }}
        <br>
        <a href="/projects/{{$project->id}}/edit">Edit Project</a>
            
        @if ($project->tasks->count())
            <div>
                @foreach ($project->tasks as $task)
            <form method="POST" action="/tasks/{{$task->id}}">
                @method('PATCH')
                @csrf
                    <label for="completed" class="{{$task->completed ? 'isComplete' : ''}}">
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                        {{$task->description}}
                    </label>
                </form>
                @endforeach
            </div>
        @endif
        <br>
        {{-- Add a new task --}}
        <form method="POST" action="/projects/{{$project->id}}/tasks">
            @csrf
            <label for="task">New Task</label>
            <input type="text" name="description" id="description" required>
            <button type="submit" >Add</button>
            @include('errors')
        </form>

    @endsection