<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectsTasksController extends Controller
{
    public function update(Task $task){
        $task->update([
            'completed' => request()->has('completed')
        ]);
        return back();
    }

    public function store(Project $project){
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);
        return back();
    }

}
