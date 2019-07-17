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

    @endsection