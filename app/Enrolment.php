<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;

class Enrolment extends Model
{
    //
    protected $guarded = [];

    // one enrolment belongs to A user
    public function user() {
        return $this->belongsTo('App\User');
    }

    // one enrolment belongs to A course
    public function course() {
        return $this->belongsTo('App\Course');
    }
}
