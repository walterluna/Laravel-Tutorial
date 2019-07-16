@extends('layout')

    @section('content')
        <h1>{{ $project->title }}</h1>
        {{ $project->description }}
        <br>
        <a href="/projects/{{$project->id}}/edit">Edit Project</a>
            
        @if ($project->tasks->count())
            <div>
                @foreach ($project->tasks as $task)
                    <ul>{{$task->description}}</ul>
                @endforeach
            </div>
            
        @endif

    @endsection