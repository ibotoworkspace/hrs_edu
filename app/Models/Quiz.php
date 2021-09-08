<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use SoftDeletes;
    protected $table='quiz';
    public function choice(){
        return $this->hasMany('App\Models\Choices','quiz_id','id');
    }

    public function course(){
        return $this->hasOne('App\Models\Courses','id','course_id');
    }
}
