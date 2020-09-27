<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $guarded = [];

    // 
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // one course is belongs to one teacher
    public function user() {
        return $this->belongsTo('App\User');
    }

}
