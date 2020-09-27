<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //
    protected $guarded = [];

    // one assignment is belongs to a course
    public function course() {
        return $this->belongsTo('App\Course');
    }
    
}
