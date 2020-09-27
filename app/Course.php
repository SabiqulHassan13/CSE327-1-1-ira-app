<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $guraded = [];

    // one course is belongs to one teacher
    public function user() {
        $this->belongsTo('App\User');
    }

}
