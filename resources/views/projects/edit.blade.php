@extends('layout')

@section('content')
    <h1>Edit project</h1>
    <form method="POST" action="/projects/{{$project->id}}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$project->title}}" required>
        </div>
        <div>
            <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{$project->description}}" required>


        </div>
        <div>
            <button type="submit">Update Project</button>
        </div>
    </form>
    <form method="POST" action="/projects/{{$project->id}}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <button type="submit">Delete project </button>
    </form>

@endsection