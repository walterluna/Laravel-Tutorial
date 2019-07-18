<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function tasks(){
        return $this->hasMany(Task::class); 
    }


    public function addTask($attributes)
    {
        $this->tasks()->create($attributes);

        // --------------------- Otra alternativa ------------------
        // return Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description
        // ]);
    }
}
