<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // atributes
    protected $guarded = [];

    // functions
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
